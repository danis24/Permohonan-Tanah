<?php
class Data extends CI_Model {
    //put your code here
    function __construct(){
        parent::__construct();
    }
    
    function select_data() {
        $query = $this->db->get('tanah');
        return $query->result();
    }
    
}