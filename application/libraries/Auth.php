<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth {
    public function cek_login()
    {
        $this->ci       =& get_instance();
        $this->sesi     = $this->ci->session->userdata('isLogin');
        if ($this->sesi != TRUE ) {
            redirect(base_url('index.php/Login'));
            exit();
        }
    }
    
}