<?php

class M_permohonan extends CI_Model{
    function buat_kode()   {
        $this->db->select('RIGHT(permohonan_alih_hak_tanah.idpermohonan,7) as kode', FALSE);
        $this->db->order_by('idpermohonan','DESC');
        $this->db->limit(1);
        $query = $this->db->get('permohonan_alih_hak_tanah');      //cek dulu apakah ada sudah ada kode di tabel.
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
        $kodejadi = "P".$kodemax;
        return $kodejadi;
    }


    public function getPermohonanJoin()
    {
        $query = $this->db->query("SELECT p.idpermohonan, p.idlayanan, p.nama_pemohon, p.alamat, p.status_syarat, p.syarat_belum, p.status_tanah, p.nohp, p.progres, p.tgl_aju, p.pencatat, p.statperm, d.nama_l, d.syarat, p.email FROM permohonan_alih_hak_tanah p JOIN detail_layanan d ON (p.idlayanan = d.idlayanan ) ; ");
        return $query;
    }

    public function getPersetujuanP()
    {
        $query = $this->db->query("SELECT p.idpermohonan, p.idlayanan, p.nama_pemohon, p.alamat, p.status_syarat, p.syarat_belum, p.status_tanah, p.nohp, p.progres, p.tgl_aju, p.pencatat, p.statperm, d.nama_l, d.syarat FROM permohonan_alih_hak_tanah p JOIN detail_layanan d ON (p.idlayanan = d.idlayanan ) where p.statperm='Belum Disetujui' ; ");
        return $query;
    }

    function getPermohonan($idpermohonan=null)
    {
        if (isset($idpermohonan)) {
            $this->db->where('idpermohonan',$idpermohonan);
        }
        $query = $this->db->get('permohonan_alih_hak_tanah');
        return $query;
    }


    function insert($pencatat,$idpermohonan,$nama,$alamat,$nohp,$jenislayanan,$statusp,$tglaju,$progres, $statperm, $email)
    {
        $this->pencatat     = $pencatat;
        $this->idpermohonan    = $idpermohonan;
        $this->nama_pemohon    = $nama;
        $this->alamat      = $alamat;
        $this->nohp      = $nohp;
        $this->tgl_aju      = $tglaju;
        $this->idlayanan      = $jenislayanan;
        $this->status_tanah      = $statusp;
        $this->progres      = $progres;
        $this->statperm      = $statperm;
        $this->email       = $email;

        $query = $this->db->insert('permohonan_alih_hak_tanah',$this);
        return $query;
        //return $this->db->insert_id();
    }
    function update($idpermohonan, $username, $nama, $alamat, $nohp, $jenislayanan, $statusp, $tglaju, $status_s, $email)
    {
        $this->pencatat  = $username;
        $this->nama_pemohon   = $nama;
        $this->alamat   = $alamat;
        $this->nohp   = $nohp;
        $this->idlayanan   = $jenislayanan;
        $this->status_tanah   = $statusp;
        $this->tgl_aju   = $tglaju;
        $this->status_syarat   = $status_s;
        $this->email = $email;

        $query = $this->db->where('idpermohonan',$idpermohonan)->update('permohonan_alih_hak_tanah',$this);
        //echo $this->db->last_query();
        return $query;
    }
    function update2($idpermohonan, $username, $status_p)
    {
        $this->pencatat  = $username;
        $this->statperm   = $status_p;


        $query = $this->db->where('idpermohonan',$idpermohonan)->update('permohonan_alih_hak_tanah',$this);
        //echo $this->db->last_query();
        return $query;
    }
    function delete($nopersil)
    {
        $query = $this->db->where('no_persil',$nopersil)->delete('tanah');
        return $query;
    }

}
