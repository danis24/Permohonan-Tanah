<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanUtama extends CI_Controller {

	function __construct() {
            parent::__construct();
            $this->auth->cek_login();
        }
        
	public function index()
	{	
                //$jenisakses    = $this->session->userdata('jenisakses');
                $level              = $this->session->userdata('level');
                $data['nama_user']  = $this->session->userdata('namap');
                $data['jabatan']    = $this->session->userdata('jenisakses');
                
                if ($level == "1") {
                    $this->template->load('admin/static1', 'admin/dashboard');
                }
                elseif ($level == "2") {
                    $this->template->load('admin/static2', 'admin/dashboard', $data);
                }
                elseif ($level == "3") {
                    $this->template->load('admin/static3', 'admin/dashboard');
                }
                
                
                	
	}
	
	
}
