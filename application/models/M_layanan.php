<?php

class M_layanan extends CI_Model{
    
    function buat_kode()   {    
        $this->db->select('RIGHT(detail_layanan.idlayanan,7) as kode', FALSE);
        $this->db->order_by('idlayanan','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('detail_layanan');      //cek dulu apakah ada sudah ada kode di tabel.    
        if($query->num_rows() <> 0){      
         //jika kode ternyata sudah ada.      
         $data = $query->row();      
         $kode = intval($data->kode) + 1;    
        }
        else{      
         //jika kode belum ada      
         $kode = 1;    
        }
        $kodemax = str_pad($kode, 7, "0", STR_PAD_LEFT);    
        $kodejadi = "L".$kodemax;    
        return $kodejadi;  
    }
    
    function getLayanan($idlayanan=null)
    {
		if (isset($idlayanan)) {
			$this->db->where('idlayanan',$idlayanan);
		}
                    $query = $this->db->get('detail_layanan');
                    return $query;
    }
    function getLayanan2($idpermohonan=null)
    {
		if (isset($idpermohonan)) {
			$this->db->where('idlayanan',$idlayanan);
		}
                    $query = $this->db->get('detail_layanan');
                    return $query;
    }
    
    
    function insert($idlayanan,$namalayanan,$syarat)
    {
	$this->idlayanan     = $idlayanan;
	$this->nama_l        = $namalayanan;
	$this->syarat        = $syarat;

	$query = $this->db->insert('detail_layanan',$this);
	return $query;
	
    }
    function update($idlayanan,$namalayanan,$syarat)
    {
		//$this->username     = $username;
		$this->nama_l   = $namalayanan;
		$this->syarat   = $syarat;
		
		$query = $this->db->where('idlayanan',$idlayanan)->update('detail_layanan',$this);
		//echo $this->db->last_query();
		return $query;
    }
    function delete($idlayanan)
    {
	$query = $this->db->where('idlayanan',$idlayanan)->delete('detail_layanan');
	return $query;
    }
      	
}

