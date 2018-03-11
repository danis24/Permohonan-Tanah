<?php

class M_bukutanah extends CI_Model{
    function buat_kode()   {    
        $this->db->select('RIGHT(transaksitanah.id_transaksi,7) as kode', FALSE);
        $this->db->order_by('id_transaksi','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('transaksitanah');      //cek dulu apakah ada sudah ada kode di tabel.    
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
        $kodejadi = "TR".$kodemax;    
        return $kodejadi;  
    }
    
    
    function getTransaksiN($idtransaksi)
    {	
	$this->db->where('id_transaksi',$idtransaksi);
        $query = $this->db->get('transaksitanah');
        return $query;
    }
    
    function getTransaksi($nokohir=null)
    {
	if (isset($nokohir)) {
            $this->db->where('nokohir',$nokohir);
	}
        $query = $this->db->get('transaksitanah');
        return $query;
    }
   
    function insert($username,$idtransaksi, $nopersil, $kelastanah, $jenistanah, $luastanah, $pajak, $sebabalih, $tglalih, $kohirasal, $ket,$kohirtujuan)
    {
	$this->username     = $username;
	$this->id_transaksi = $idtransaksi;
	$this->no_persil    = $nopersil;
	$this->kelas_t   = $kelastanah;
        $this->jenis_t      = $jenistanah;
        $this->luas_t       = $luastanah;
        $this->pajak        = $pajak;
        $this->sebab_alih   = $sebabalih;
        $this->tgl_alih     = $tglalih;
        $this->asal_kohir   = $kohirasal;
        $this->ket          = $ket;
        $this->nokohir      = $kohirtujuan;
	
	$query = $this->db->insert('transaksitanah',$this);
	return $query;
	//return $this->db->insert_id();
    }
    function update($id_tanahalih, $luas_tanahbaru, $username)
    {
		$this->username = $username;
		$this->luas_t   = $luas_tanahbaru;
	
		$query = $this->db->where('id_transaksi',$id_tanahalih)->update('transaksitanah',$this);
		return $query;
    }
    function update_statustanah($id_tanahalih, $status_tanah, $username)
    {
	$this->username = $username;
	$this->statustanah = $status_tanah;
	
        $query = $this->db->where('id_transaksi',$id_tanahalih)->update('transaksitanah',$this);
        return $query;
    }
    function delete($nopersil)
    {
	$query = $this->db->where('no_persil',$nopersil)->delete('tanah');
	return $query;
    }
      	
}

