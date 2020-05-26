<?php

defined('BASEPATH') or exit('No direct script access allowed');

class karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function tambah()
    {
        $data['title'] = 'Karyawan';
        $data['gaji'] = $this->gaji_m->getAllGaji();
        $data['divisi'] = $this->divisi_m->getAllDivisi();
        $data['jabatan'] = $this->jabatan_m->getAllJabatan();
        $data['kecamatan'] = $this->kecamatan_m->getAllkecamatan();
        $data['kota'] = $this->kt_kb_m->getAllKota();
        $data['provinsi'] = $this->provinsi_m->getAllProvinsi();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('karyawan/tambah', $data);
        $this->load->view('template/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Karyawan';
        $data['karyawan'] = $this->karyawan_m->getKaryawanById($id);
        $data['gaji'] = $this->gaji_m->getAllGaji();
        $data['divisi'] = $this->divisi_m->getAllDivisi();
        $data['jabatan'] = $this->jabatan_m->getAllJabatan();
        $data['kecamatan'] = $this->kecamatan_m->getAllkecamatan();
        $data['kota'] = $this->kt_kb_m->getAllKota();
        $data['provinsi'] = $this->provinsi_m->getAllProvinsi();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('karyawan/ubah', $data);
        $this->load->view('template/footer', $data);
    }

    public function tambah_simpan()
    {
        $this->karyawan_m->addKaryawan();
        $this->session->set_flashdata('pesan', 'Ditambahkan');
        redirect('menu/karyawan');
    }

    public function ubah_simpan($id)
    {
        $this->karyawan_m->updateKaryawan($id);
        $this->session->set_flashdata('pesan', 'Diubah');
        redirect('menu/karyawan');
    }

    public function profil($id)
    {
        $data['title'] = 'Profil Karyawan';
        $data['karyawan'] = $this->karyawan_m->getKaryawanById($id);
        $data['gaji'] = $this->gaji_m->getAllGaji();
        $data['divisi'] = $this->divisi_m->getAllDivisi();
        $data['jabatan'] = $this->jabatan_m->getAllJabatan();
        $data['kecamatan'] = $this->kecamatan_m->getAllkecamatan();
        $data['kota'] = $this->kt_kb_m->getAllKota();
        $data['provinsi'] = $this->provinsi_m->getAllProvinsi();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('karyawan/profil', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id)
    {
        $this->karyawan_m->deleteKaryawan($id);
        $this->session->set_flashdata('pesan', 'Dihapus');
        redirect('menu/karyawan');
    }
}

/* End of file karyawan.php */
