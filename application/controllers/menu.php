<?php
defined('BASEPATH') or exit('No direct script access allowed');

class menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_not_login();
	}
	
	public function index()
	{
		$data['title'] = 'Beranda';
		$data['karyawan'] = $this->karyawan_m->getAllKaryawan();
		$data['divisi'] = $this->divisi_m->getAllDivisi();
        $data['jabatan'] = $this->jabatan_m->getAllJabatan();
		$data['provinsi'] = $this->provinsi_m->getAllProvinsi();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('beranda', $data);
		$this->load->view('template/footer', $data);
	}

	public function peta()
	{
		$data['title'] = 'Pemetaan';
		$data['karyawan'] = $this->karyawan_m->getAllKaryawan();
		$data['kecamatan'] = $this->kecamatan_m->getAllkecamatan();
        $data['kota'] = $this->kt_kb_m->getAllKota();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('pemetaan', $data);
		$this->load->view('template/footer', $data);
	}

	public function karyawan()
	{
		$data['title'] = 'Karyawan';
		$data['karyawan'] = $this->karyawan_m->getAllKaryawan();
		$data['divisi'] = $this->divisi_m->getAllDivisi();
		$data['jabatan'] = $this->jabatan_m->getAllJabatan();
		
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('karyawan/index', $data);
        $this->load->view('template/footer');
	}

	public function tentang()
	{
		$data['title'] = 'Tentang';

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('tentang', $data);
		$this->load->view('template/footer');
	}
}
