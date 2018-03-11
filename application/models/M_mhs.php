<?php

class M_mhs extends CI_Model{
    
   
    
    function getMhs()
    {
		
                    $query = $this->db->get('tb_mhs');
                    return $query;
    }
    
    
   
      	
}

