<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permohonan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->auth->cek_login();
        $this->load->model('m_permohonan');
        $this->load->model('m_layanan');
        $this->load->model('m_mhs');

        $this->data['label'] = array(
            'home' => 'Dashboard',
            'link_home' => 'Dashboard',
            'parent' => 'Katalog',
            'link_parent' => 'Katalog',
            'sub_parent' => 'Data Katalog',
        );
    }

    public function index()
    {

        $data['permohonan'] = $this->m_permohonan->getPermohonanJoin();
        //$data['tanah'] = $this->m_tanah->getTanah();
        //$jenisakses    = $this->session->userdata('jenisakses');
        $this->template->load('admin/static', 'admin/lihat_permohonan', $data);

        /*
    if ($jenisakses == "Petugas Seksi") {
    $this->template->load ('admin/static1', 'admin/lihat_permohonan',$data);
    }
    elseif ($jenisakses == "Kepala Seksi") {
    $this->template->load ('admin/static2', 'admin/lihat_permohonan',$data);
    }
    else {
    echo "anda tidak memiliki akses menggunakan fitur ini";
    }
     *
     */

    }

    public function tambah_permohonan()
    {
        $data['nama_user'] = $this->session->userdata('namap');
        $data['kodeunik'] = $this->m_permohonan->buat_kode();
        $data['layanan'] = $this->m_layanan->getLayanan();
        $this->template->load('admin/static', 'admin/form_permohonan', $data);
    }

    public function tambah_permohonan2()
    {

        //$data['mhs'] = $this->m_mhs->getMhs();
        $data['mhs'] = $this->m_layanan->getLayanan();
        $this->template->load('admin/static', 'admin/form_permohonan2', $data);
    }
    public function tambah_permohonan3()
    {

        $data['mhs'] = $this->m_mhs->getMhs();
        $this->load->view('admin/form_onchange', $data);
    }

    public function proses_tambah()
    {

        $pencatat = $this->session->userdata('namap');
        $idpermohonan = $this->input->post('idpermohonan');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $nohp = $this->input->post('nohp');
        $jenislayanan = $this->input->post('jenislayanan');
        $statusp = $this->input->post('statusp');
        $email = $this->input->post('email');
        $tglaju = date('Y-m-d');
        $progres = "Mengajukan Permohonan";
        $statperm = "Belum Disetujui";

        $cek = $this->m_permohonan->getPermohonan($idpermohonan)->num_rows();

        if ($cek > 0) {

            $this->session->set_flashdata('pesan', 'Kesalahan !!');
            $this->session->set_flashdata('detail_pesan', 'Data permohonan tidak berhasil disimpan, data permohonan atau ID permohonan sudah terdaftar di database!');
            $this->session->set_flashdata('alert', 'alert-danger');
            redirect(base_url('index.php/Permohonan/tambah_permohonan'));
        } else {
            $this->m_permohonan->insert($pencatat, $idpermohonan, $nama, $alamat, $nohp, $jenislayanan, $statusp, $tglaju, $progres, $statperm, $email);
            $this->session->set_flashdata('pesan', 'Sukses !!');
            $this->session->set_flashdata('detail_pesan', 'Data permohonan berhasil disimpan!');
            $this->session->set_flashdata('alert', 'alert-success');

            redirect(base_url('index.php/Permohonan'));
        }

    }

    public function edit($idpermohonan)
    {

        $data['permohonan'] = $this->m_permohonan->getPermohonan($idpermohonan)->row();
        $data['layanan'] = $this->m_layanan->getLayanan();
        $this->template->load('admin/static', 'admin/form_editpermohonan', $data);
    }

    public function get_persetujuan()
    {

        $data['permohonan'] = $this->m_permohonan->getPersetujuanP();
        //$data['tanah'] = $this->m_tanah->getTanah();
        $this->template->load('admin/static', 'admin/lihat_persetujuan', $data);
    }

    public function persetujuan($idpermohonan)
    {

        $data['permohonan'] = $this->m_permohonan->getPermohonan($idpermohonan)->row();
        $data['layanan'] = $this->m_layanan->getLayanan();
        $this->template->load('admin/static', 'admin/form_persetujuanp', $data);
    }

    public function proses_update($idpermohonan)
    {
        $username = $this->session->userdata('namap');

        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $nohp = $this->input->post('nohp');
        $jenislayanan = $this->input->post('jenislayanan');
        $stat_pmlik = $this->input->post('stat_pmlik');
        $email = $this->input->post('email');
        $tglaju = date('Y-m-d');

        $status_s = $this->input->post('status_s');

        $status = $this->m_permohonan->update($idpermohonan, $username, $nama, $alamat, $nohp, $jenislayanan, $stat_pmlik, $tglaju, $status_s, $email);
        if ($status) {
            $this->session->set_flashdata('pesan', 'Sukses !!');
            $this->session->set_flashdata('detail_pesan', 'Data tanah berhasil diupdate!');
            $this->session->set_flashdata('alert', 'alert-success');
            redirect(base_url('index.php/Permohonan'));
        } else {
            $this->session->set_flashdata('pesan', 'Kesalahan !!');
            $this->session->set_flashdata('detail_pesan', 'Data tanah tidak berhasil diupdate!');
            $this->session->set_flashdata('alert', 'alert-danger');
            redirect(base_url('index.php/Permohonan/tambah_permohonan'));
        }
    }
    public function proses_persetujuan($idpermohonan)
    {
        $username = $this->session->userdata('namap');

        //$nama            = $this->input->post('nama');
        //$alamat          = $this->input->post('alamat');
        //$nohp            = $this->input->post('nohp');
        //$jenislayanan    = $this->input->post('jenislayanan');
        //$stat_pmlik         = $this->input->post('stat_pmlik');
        //$tglaju          = date('Y-m-d');
        //$progres = "Pengajuan";

        $status_p = $this->input->post('status_p');
        $email = $this->input->post('email');

        $status = $this->m_permohonan->update2($idpermohonan, $username, $status_p);
        if ($status) {
            $this->sendEmail($email, $status_p);
            $this->session->set_flashdata('pesan', 'Sukses !!');
            $this->session->set_flashdata('detail_pesan', 'Data tanah berhasil diupdate!');
            $this->session->set_flashdata('alert', 'alert-success');
            redirect(base_url('index.php/Permohonan/get_persetujuan'));
        } else {
            $this->session->set_flashdata('pesan', 'Kesalahan !!');
            $this->session->set_flashdata('detail_pesan', 'Data tanah tidak berhasil diupdate!');
            $this->session->set_flashdata('alert', 'alert-danger');
            redirect(base_url('index.php/Permohonan/tambah_permohonan'));
        }
    }

    public function setujui()
    {
        $id = $this->uri->segment(3);
        $this->db->where('idpermohonan', $id);
        $getEmail = $this->db->get('permohonan_alih_hak_tanah')->row_array();

        $data = array(
            'statperm' => 'Permohonan Disetujui',
        );
        $this->db->where('idpermohonan', $id);
        $tanah = $this->db->update('permohonan_alih_hak_tanah', $data);
        if ($tanah) {
            $this->curl($getEmail['email'], 'Permohonan Disetujui');
            $this->session->set_flashdata('pesan', 'Sukses !!');
            $this->session->set_flashdata('detail_pesan', 'Anda Telah Menyetujui permohonan!');
            $this->session->set_flashdata('alert', 'alert-success');
            redirect(base_url('index.php/Permohonan/get_persetujuan'));
        } else {
            $this->session->set_flashdata('pesan', 'Kesalahan !!');
            $this->session->set_flashdata('detail_pesan', 'Anda Gagal Menyetujui permohonan!');
            $this->session->set_flashdata('alert', 'alert-danger');
            redirect(base_url('index.php/Permohonan/get_persetujuan'));
        }
    }

    public function tolak()
    {
        $id = $this->uri->segment(3);
        $this->db->where('idpermohonan', $id);
        $getEmail = $this->db->get('permohonan_alih_hak_tanah')->row_array();
        $data = array(
            'statperm' => 'Permohonan Ditolak',
        );
        $this->db->where('idpermohonan', $id);
        $tanah = $this->db->update('permohonan_alih_hak_tanah', $data);
        if ($tanah) {
            $this->curl($getEmail['email'], 'Permohonan Ditolak');
            $this->session->set_flashdata('pesan', 'Sukses !!');
            $this->session->set_flashdata('detail_pesan', 'Anda Telah Menolak permohonan!');
            $this->session->set_flashdata('alert', 'alert-success');
            redirect(base_url('index.php/Permohonan/get_persetujuan'));
        } else {
            $this->session->set_flashdata('pesan', 'Kesalahan !!');
            $this->session->set_flashdata('detail_pesan', 'Anda Gagal Menolak permohonan!');
            $this->session->set_flashdata('alert', 'alert-danger');
            redirect(base_url('index.php/Permohonan/get_persetujuan'));
        }
    }

    public function curl($email, $status)
    {
        $this->curl->simple_post('https://floating-scrubland-30453.herokuapp.com/index.php', array(
            'email' => $email,
            'status' => $status,
        ));
    }

}
