<?php

defined('BASEPATH') or exit('No direct script access allowed');

class karyawan extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('karyawan_m','karyawan');
		$this->load->model('gaji_m','gaji');
		$this->load->model('divisi_m','divisi');
		$this->load->model('jabatan_m','jabatan');
		$this->load->model('kecamatan_m','kecamatan');
		$this->load->model('kt_kb_m','kota');
		$this->load->model('provinsi_m','provinsi');
		check_not_login();
    }
    
    public function tambah()
    {
        $data['title'] = 'Karyawan';
        $data['gaji'] = $this->gaji->getAllGaji();
        $data['divisi'] = $this->divisi->getAllDivisi();
        $data['jabatan'] = $this->jabatan->getAllJabatan();
        $data['kecamatan'] = $this->kecamatan->getAllkecamatan();
        $data['kota'] = $this->kota->getAllKota();
        $data['provinsi'] = $this->provinsi->getAllProvinsi();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('karyawan/tambah', $data);
        $this->load->view('template/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Karyawan';
        $data['karyawan'] = $this->karyawan->getKaryawanById($id);
        $data['gaji'] = $this->gaji->getAllGaji();
        $data['divisi'] = $this->divisi->getAllDivisi();
        $data['jabatan'] = $this->jabatan->getAllJabatan();
        $data['kecamatan'] = $this->kecamatan->getAllkecamatan();
        $data['kota'] = $this->kota->getAllKota();
        $data['provinsi'] = $this->provinsi->getAllProvinsi();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('karyawan/ubah', $data);
        $this->load->view('template/footer');
    }

    public function tambah_simpan()
    {
        $this->karyawan->addKaryawan();
        $this->session->set_flashdata('pesan', 'Ditambahkan');
        redirect('menu/karyawan');
    }

    public function ubah_simpan($id)
    {
        $this->karyawan->updateKaryawan($id);
        $this->session->set_flashdata('pesan', 'Diubah');
        redirect('menu/karyawan');
    }

    public function profil($id)
    {
        $data['title'] = 'Profil Karyawan';
        $data['karyawan'] = $this->karyawan->getKaryawanById($id);
        $data['gaji'] = $this->gaji->getAllGaji();
        $data['divisi'] = $this->divisi->getAllDivisi();
        $data['jabatan'] = $this->jabatan->getAllJabatan();
        $data['kecamatan'] = $this->kecamatan->getAllkecamatan();
        $data['kota'] = $this->kota->getAllKota();
        $data['provinsi'] = $this->provinsi->getAllProvinsi();

        // var_dump($data['karyawan']);die();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('karyawan/profil', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id)
    {
        $this->karyawan->deleteKaryawan($id);
        $this->session->set_flashdata('pesan', 'Dihapus');
        redirect('menu/karyawan');
    }


}

/* End of file karyawan.php */
