<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct()
    {
	parent::__construct();
        $this->load->model('m_user');
    }

    function index()
    {


        $this->load->view('admin/v_login');
        if ($this->session->userdata('isLogin'))
        {
            redirect(base_url('index.php/HalamanUtama'));

        }
    }


    function do_login(){
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        $status = $this->m_user->cek_user($username,$password)->row();
        if ($status)
        {
            $data = array(
                'username'      => $status->username,
                'jenisakses'    => $status->jenis_akses,
                'namap'         => $status->nama_p,
                'level'         => $status->level,
                'isLogin'       => true
            );
            $this->session->set_userdata($data);
            redirect(base_url('index.php/HalamanUtama'));
        }
        else
        {
            $this->session->set_flashdata('pesan','Error !!');
            $this->session->set_flashdata('detail_pesan','username atau password yang anda masukan tidak benar');
            $this->session->set_flashdata('alert','alert-danger');
            redirect(base_url('index.php/Login'));

        }

    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('index.php/Login'));
    }





}
