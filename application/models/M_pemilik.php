<?php

class M_pemilik extends CI_Model{
    
    
    //public function getTanahN($nopersil)
    //{
    //    $query = $this->db->query("SELECT * From tanah where no_persil=$nopersil; ");
    //    return $query;
    //}
    
    function getPemilik($nokohir=null)
    {
		if (isset($nokohir)) {
			$this->db->where('nokohir',$nokohir);
		}
                    $query = $this->db->get('pemilik');
                    return $query;
    }
    
    
    function insert($username,$nokohir,$nama_wp,$alamat)
    {
	$this->username     = $username;
	$this->nokohir      = $nokohir;
	$this->nama_wp      = $nama_wp;
	$this->alamat       = $alamat;
	
	$query = $this->db->insert('pemilik',$this);
	return $query;
	//return $this->db->insert_id();
    }
    function update($username,$nokohir,$nama_wp,$alamat)
    {
		$this->username  = $username;
		$this->nama_wp   = $nama_wp;
		$this->alamat    = $alamat;
		
		$query = $this->db->where('nokohir',$nokohir)->update('pemilik',$this);
		//echo $this->db->last_query();
		return $query;
    }
    function delete($nokohir)
    {
	$query = $this->db->where('nokohir',$nokohir)->delete('pemilik');
	return $query;
    }
      	
}

