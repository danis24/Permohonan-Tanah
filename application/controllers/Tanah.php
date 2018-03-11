<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanah extends CI_Controller {
    function __construct()
    {
	parent::__construct();
        $this->auth->cek_login();
        $this->load->model('m_tanah');
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
		$data['tanah'] = $this->m_tanah->getTanah();
                $this->template->load ('admin/static', 'admin/lihat_datatanah',$data);
	}

	function tambah()
	{

            $this->template->load ('admin/static', 'admin/form_tambahtanah');
	}
        function latihan1()
	{

            $this->template->load ('admin/static', 'admin/form_1');
	}
        
	function proses_tambah()
        {
           
            $username    = $this->session->userdata('username');
            $nopersil    = $this->input->post('nopersil');
            $kelastanah  = $this->input->post('kelastanah');
            $jenistanah  = $this->input->post('jenistanah');
           
            $cek    = $this->m_tanah->getTanah($nopersil)->num_rows();
            //echo $cek;
            //$jum    = mysql_num_rows($cek);
            //echo $jum;
            if ($cek > 0) {
                
                $this->session->set_flashdata('pesan','Kesalahan !!');
                $this->session->set_flashdata('detail_pesan','Data tanah tidak berhasil disimpan, no. persil yang anda masukan sudah terdapat di database!');
                $this->session->set_flashdata('alert','alert-danger');
                redirect(base_url('index.php/Tanah/'));
            }
            else {
                $this->m_tanah->insert($username,$nopersil,$kelastanah,$jenistanah);
                $this->session->set_flashdata('pesan','Sukses !!');
                $this->session->set_flashdata('detail_pesan','Data tanah berhasil disimpan!');
                $this->session->set_flashdata('alert','alert-success');
                
                $this->session->set_flashdata('pesan2','Sukses !!');
                $this->session->set_flashdata('detail_pesan2','Data tanah berhasil disimpan!');
                $this->session->set_flashdata('alert2','alert-danger');
                
                redirect(base_url('index.php/Tanah'));
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
