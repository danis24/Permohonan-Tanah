<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {
    function __construct()
    {
	parent::__construct();
        $this->auth->cek_login();
        $this->load->model('m_layanan');
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
		$data['layanan'] = $this->m_layanan->getLayanan();
		//$this->_render_page('admin/content2');
                $this->template->load ('admin/static', 'admin/lihat_layanan',$data);
	}

	function tambah_layanan()
	{
            $data['kodeunik'] = $this->m_layanan->buat_kode();
            $this->template->load ('admin/static', 'admin/form_layanan', $data);
	}
        
	function proses_tambah()
        {
            $idlayanan    = $this->input->post('idlayanan');
            $namalayanan  = $this->input->post('namalayanan');
            $syarat       = $this->input->post('syarat');
            
            $cek    = $this->m_layanan->getLayanan($idlayanan)->num_rows();
            
            if ($cek > 0) {
                
                $this->session->set_flashdata('pesan','Kesalahan !!');
                $this->session->set_flashdata('detail_pesan','Data tidak berhasil disimpan, data layanan sudah terdapat di database!');
                $this->session->set_flashdata('alert','alert-danger');
                redirect(base_url('index.php/Layanan/tambah_layanan'));
            }
            else {
                $this->m_layanan->insert($idlayanan,$namalayanan,$syarat);
                $this->session->set_flashdata('pesan','Sukses !!');
                $this->session->set_flashdata('detail_pesan','Data layanan berhasil ditambahkan!');
                $this->session->set_flashdata('alert','alert-success');
                
                redirect(base_url('index.php/Layanan'));
            }
            
            
        } 
    
	
}
