<?php

class M_masyarakat extends CI_Model{
   
    public function cek_user($username="",$password="")
    {
        $query = $this->db->get_where('masyarakat', array('username'=>$username, 'password' => $password));
        
        return $query;
    }
    
    function getUser($username=null)
    {
		if (isset($username)) {
			$this->db->where('username',$username);
		}
                    $query = $this->db->get('masyarakat');
                    return $query;
    }
    
    function insert($username,$password,$namap,$alamat,$nohp,$jenisakses)
    {
	$this->username     = $username;
	$this->password    = $password;
	$this->nama_p      = $namap;
	$this->alamat      = $alamat;
        $this->nohp      = $nohp;
        $this->jenis_akses      = $jenisakses;
	
	$query = $this->db->insert('petugas',$this);
	return $query;
	//return $this->db->insert_id();
    }
    function update($username, $namap,$alamat,$nohp,$jenisakses)
    {
		//$this->username  = $username;
		$this->nama_p   = $namap;
		$this->alamat   = $alamat;
                $this->nohp   = $nohp;
                $this->jenis_akses   = $jenisakses;
		
		$query = $this->db->where('username',$username)->update('petugas',$this);
		//echo $this->db->last_query();
		return $query;
    }
    function delete($username)
    {
	$query = $this->db->where('username',$username)->delete('petugas');
	return $query;
    }
      	
}

