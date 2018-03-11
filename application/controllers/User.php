<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    function __construct()
    {
	parent::__construct();
        $this->auth->cek_login();
        $this->load->model('m_user');
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
		$data['user'] = $this->m_user->getUser();
                $this->template->load ('admin/static', 'admin/lihat_akun',$data);
	}

	function tambah_akun()
	{

            $this->template->load ('admin/static', 'admin/form_tambahakun');
	}
        function tambah_akun_masyarakat()
	{

            $this->template->load ('admin/static', 'admin/form_tambahakun');
	}
        
	function proses_tambah()
        {
            $username   = $this->input->post('username');
            $password   = $this->input->post('password');
            $namap      = $this->input->post('namap');
            $alamat     = $this->input->post('alamat');
            $nohp       = $this->input->post('nohp');
            $jenisakses = $this->input->post('jenisakses');
            
            $cek    = $this->m_user->getUser($username)->num_rows();
            
            if ($cek > 0) {
                
                $this->session->set_flashdata('pesan','Kesalahan !!');
                $this->session->set_flashdata('detail_pesan','Data akun tidak berhasil disimpan, username yang anda masukan sudah digunakan!');
                $this->session->set_flashdata('alert','alert-danger');
                redirect(base_url('index.php/User/tambah_akun'));
            }
            else {
                $this->m_user->insert($username,$password,$namap,$alamat,$nohp,$jenisakses);
                $this->session->set_flashdata('pesan','Sukses !!');
                $this->session->set_flashdata('detail_pesan','Data akun berhasil ditambahkan!');
                $this->session->set_flashdata('alert','alert-success');
                redirect(base_url('index.php/User'));
            }
            
            
        }
        function edit($username){
            //$data['tanah'] = $this->m_tanah->getTanah();
            $data['user'] = $this->m_user->getUser($username)->row();
            $this->template->load ('admin/static', 'admin/form_edituser', $data);
        }
        
        function proses_update($username)
        {
           
            $namap      = $this->input->post('namap');
            $alamat     = $this->input->post('alamat');
            $nohp       = $this->input->post('nohp');
            $jenisakses = $this->input->post('jenisakses');
             
            $status = $this->m_user->update($username, $namap,$alamat,$nohp,$jenisakses);
            if ($status) 
            {
                $this->session->set_flashdata('pesan','Sukses !!');
                $this->session->set_flashdata('detail_pesan','Data akun berhasil diupdate!');
                $this->session->set_flashdata('alert','alert-success');
                redirect(base_url('index.php/User'));
            }
            else
            {
                $this->session->set_flashdata('pesan','Kesalahan !!');
                $this->session->set_flashdata('detail_pesan','Data akun tidak berhasil diupdate!');
                $this->session->set_flashdata('alert','alert-danger');
                redirect(base_url('index.php/User/edit'));
            }
        }
    
	
}
