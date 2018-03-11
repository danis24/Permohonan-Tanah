<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilik extends CI_Controller {
    function __construct()
    {
	parent::__construct();
        $this->auth->cek_login();
        $this->load->model('m_pemilik');
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
                $this->template->load ('admin/static', 'admin/lihat_pemiliktanah',$data);
	}

	function tambah_pemilik()
	{

            $this->template->load ('admin/static', 'admin/form_pemiliktanah');
	}
        
	function proses_tambah()
        {
           
            $username    = $this->session->userdata('username');
            $nokohir    = $this->input->post('nokohir');
            $nama_wp  = $this->input->post('nama');
            $alamat  = $this->input->post('alamat');
           
            $cek    = $this->m_pemilik->getPemilik($nokohir)->num_rows();
            
            if ($cek > 0) {
                
                $this->session->set_flashdata('pesan','Kesalahan !!');
                $this->session->set_flashdata('detail_pesan','Data tidak berhasil disimpan, No. kohir yang anda masukan sudah terdapat di database!');
                $this->session->set_flashdata('alert','alert-danger');
                redirect(base_url('index.php/Pemilik/tambah_pemilik'));
            }
            else {
                $this->m_pemilik->insert($username,$nokohir,$nama_wp,$alamat);
                $this->session->set_flashdata('pesan','Sukses !!');
                $this->session->set_flashdata('detail_pesan','Data pemilik tanah berhasil disimpan!');
                $this->session->set_flashdata('alert','alert-success');
                
                redirect(base_url('index.php/Pemilik'));
            }
                
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
