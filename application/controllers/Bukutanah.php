<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bukutanah extends CI_Controller {
    function __construct()
    {
	parent::__construct();
        $this->auth->cek_login();
        $this->load->model('m_pemilik');
        $this->load->model('m_bukutanah');
    }
    
  
    function index()
    {
		$this->data['label'] = array(
				'home' =>'Dashboard',
				'link_home' =>'Dashboard',
				'parent' =>'Katalog',
				'link_parent' =>'Katalog',
				'sub_parent' =>'Data Katalog'
                );
		$data['pemilik'] = $this->m_pemilik->getPemilik();
                $this->template->load ('admin/static', 'admin/lihat_buku', $data);
    }
    function transaksi_tanah($nokohir)
    {
        $data['transaksi']  = $this->m_bukutanah->getTransaksi($nokohir);
        $data['pemilik']    = $this->m_pemilik->getPemilik($nokohir)->row();
        $this->template->load ('admin/static', 'admin/lihat_transaksi', $data);
    }
    function jumlah_transaksi ($idtransaksi){
        $data['idtransaksi'] = $idtransaksi;
        $this->template->load ('admin/static', 'admin/form_jumlah', $data);
    }
    
    function tambah_transaksi(){
        $idtransaksi    = $this->input->post('idtransaksi');
        $data['kodeunik'] = $this->m_bukutanah->buat_kode();
        $data['transaksi'] = $this->m_bukutanah->getTransaksiN($idtransaksi)->row();
        $data['jumlah'] = $this->input->post('jumlah');
        $this->template->load ('admin/static', 'admin/form_transaksitanah', $data);
    }
       
    function proses_tambah()
    {
        $jumlah       = $this->input->post('jumlah');
        $batas_luas   = $this->input->post('batas_luastanah');
        $total_luas   = 0;
        $id_tanahalih = $this->input->post('id_tanahalih');
        
        for ($i=1; $i <= $jumlah; $i++)
        {
            $luastanah   = $this->input->post('luastanah'.$i);
            $total_luas  = $total_luas+$luastanah;
        }
        
        if ($total_luas > $batas_luas) 
        {
            $this->session->set_flashdata('pesan2','Kesalahan !!');
            $this->session->set_flashdata('detail_pesan2','Data transaksi tanah tidak berhasil disimpan!, total luas tanah masukan melebihi dari luas tanah yang akan dialihkan!');
            $this->session->set_flashdata('alert2','alert-danger');
            redirect(base_url('index.php/Bukutanah'));
        }
        elseif ($total_luas < $batas_luas) 
        {
            $luas_tanahbaru = $batas_luas - $total_luas;
            $username       = $this->session->userdata('username');
            $this->m_bukutanah->update($id_tanahalih, $luas_tanahbaru, $username);
            $gagal  = 0;
            $sukses = 0;
            
            for ($i=1; $i <= $jumlah; $i++)
            { 
                $username    = $this->session->userdata('username');
                $idtransaksi = $this->input->post('idtransaksi'.$i);
                $nopersil    = $this->input->post('nopersil'.$i);
                $kelastanah  = $this->input->post('kelastanah'.$i);
                $jenistanah  = $this->input->post('jenistanah'.$i);
                $luastanah   = $this->input->post('luastanah'.$i);
                $pajak       = $this->input->post('pajak'.$i);
                $sebabalih   = $this->input->post('sebabalih'.$i);
                $tglalih     = $this->input->post('tglalih'.$i);
                $tglalih2    = date('Y-m-d', strtotime($tglalih));
                $kohirasal   = $this->input->post('kohirasal'.$i);
                $ket         = $this->input->post('ket'.$i);
                $kohirtujuan = $this->input->post('kohirtujuan'.$i);

                $cek_data    = $this->m_bukutanah->getTransaksiN($idtransaksi)->num_rows();
            
                if ($cek_data > 0) {
                    $gagal = $gagal+1;
                }
                else {
                    $this->m_bukutanah->insert($username,$idtransaksi, $nopersil, $kelastanah, $jenistanah, $luastanah, $pajak, $sebabalih, $tglalih2, $kohirasal, $ket,$kohirtujuan);
                    $sukses = $sukses+1;
                }
          
            }
           
            $this->session->set_flashdata('pesan','Sukses!!');
            $this->session->set_flashdata('detail_pesan',"$sukses data berhasil disimpan!");
            $this->session->set_flashdata('alert','alert-success');
            
            $this->session->set_flashdata('pesan2','Kesalahan!!');
            $this->session->set_flashdata('detail_pesan2', "$gagal data transaksi perpindahan kepemilikan tanah tidak berhasil disimpan, karena id transaksi masukan sudah digunakan atau data transaksi sudah terdapat di database!");
            $this->session->set_flashdata('alert2','alert-danger');
            redirect(base_url('index.php/Bukutanah'));
        }
        elseif ($total_luas == $batas_luas) {
            $status_tanah = "Sudah pindah kepemilikan";
            $username = $this->session->userdata('username');
            $this->m_bukutanah->update_statustanah($id_tanahalih, $status_tanah, $username);
            $gagal  = 0;
            $sukses = 0;
            
            for ($i=1; $i <= $jumlah; $i++)
            { 
                $username    = $this->session->userdata('username');
                $idtransaksi = $this->input->post('idtransaksi'.$i);
                $nopersil    = $this->input->post('nopersil'.$i);
                $kelastanah  = $this->input->post('kelastanah'.$i);
                $jenistanah  = $this->input->post('jenistanah'.$i);
                $luastanah   = $this->input->post('luastanah'.$i);
                $pajak       = $this->input->post('pajak'.$i);
                $sebabalih   = $this->input->post('sebabalih'.$i);
                $tglalih     = $this->input->post('tglalih'.$i);
                $tglalih2    = date('Y-m-d', strtotime($tglalih));
                $kohirasal   = $this->input->post('kohirasal'.$i);
                $ket         = $this->input->post('ket'.$i);
                $kohirtujuan = $this->input->post('kohirtujuan'.$i);

                $cek_data    = $this->m_bukutanah->getTransaksiN($idtransaksi)->num_rows();
            
                if ($cek_data > 0) {
                    $gagal = $gagal+1;
                }
                else {
                    $this->m_bukutanah->insert($username,$idtransaksi, $nopersil, $kelastanah, $jenistanah, $luastanah, $pajak, $sebabalih, $tglalih2, $kohirasal, $ket,$kohirtujuan);
                    $sukses = $sukses+1;
                }
            }
           
            $this->session->set_flashdata('pesan','Sukses!!');
            $this->session->set_flashdata('detail_pesan',"$sukses data berhasil disimpan!");
            $this->session->set_flashdata('alert','alert-success');
            
            $this->session->set_flashdata('pesan2','Kesalahan!!');
            $this->session->set_flashdata('detail_pesan2', "$gagal data transaksi perpindahan kepemilikan tanah tidak berhasil disimpan, karena id transaksi masukan sudah digunakan atau data transaksi sudah terdapat di database!");
            $this->session->set_flashdata('alert2','alert-danger');
            redirect(base_url('index.php/Bukutanah'));
        }
        // looping
    }
        
    function edit($nopersil){
        //$data['tanah'] = $this->m_tanah->getTanah();
        $data['tanah'] = $this->m_tanah->getTanah($nopersil)->row();
        $this->template->load ('admin/static', 'admin/form_edittanah', $data);
    }
        
    function proses_update($nopersil)
    {
        $username    = $this->session->userdata('username');
        $kelastanah  = $this->input->post('kelastanah');
        $jenistanah  = $this->input->post('jenistanah');
             
        $status = $this->m_tanah->update($username, $nopersil,$kelastanah,$jenistanah);
        if ($status) 
        {
            $this->session->set_flashdata('pesan','Sukses !!');
            $this->session->set_flashdata('detail_pesan','Data tanah berhasil diupdate!');
            $this->session->set_flashdata('alert','alert-success');
            redirect(base_url('index.php/Tanah'));
        }
        else
        {
            $this->session->set_flashdata('pesan','Kesalahan !!');
            $this->session->set_flashdata('detail_pesan','Data tanah tidak berhasil diupdate!');
            $this->session->set_flashdata('alert','alert-danger');
            redirect(base_url('index.php/Tanah/tambah'));
        }
    }
    
	
}
