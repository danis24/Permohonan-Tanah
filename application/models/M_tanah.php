<?php

class M_tanah extends CI_Model{
    
    
    public function getTanahN($nopersil)
    {
        $query = $this->db->query("SELECT * From tanah where no_persil=$nopersil; ");
        return $query;
    }
    
    function getTanah($nopersil=null)
    {
		if (isset($nopersil)) {
			$this->db->where('no_persil',$nopersil);
		}
                    $query = $this->db->get('tanah');
                    return $query;
    }
    
    function insert($username,$nopersil,$kelastanah,$jenistanah)
    {
	$this->username     = $username;
	$this->no_persil    = $nopersil;
	$this->kelas_t      = $kelastanah;
	$this->jenis_t      = $jenistanah;
	
	$query = $this->db->insert('tanah',$this);
	return $query;
	//return $this->db->insert_id();
    }
    function update($username,$nopersil,$kelastanah,$jenistanah)
    {
		$this->username  = $username;
		$this->kelas_t   = $kelastanah;
		$this->jenis_t   = $jenistanah;
		
		$query = $this->db->where('no_persil',$nopersil)->update('tanah',$this);
		//echo $this->db->last_query();
		return $query;
    }
    function delete($nopersil)
    {
	$query = $this->db->where('no_persil',$nopersil)->delete('tanah');
	return $query;
    }
      	
}

