<?php
defined('BASEPATH') or exit('No direct script access allowed');

class menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Data_model', 'data');
		check_not_login();
	}

	public function index()
	{
		// get
		$data['title'] = 'Beranda';
		$data['karyawan'] = $this->data->getAllKaryawan();
		$data['divisi'] = $this->data->getAllDivisi();
		$data['jabatan'] = $this->data->getAllJabatan();
		$data['provinsi'] = $this->data->getAllProvinsi();

		// count
		$data['karyawan'] = $this->data->countAllKaryawan();
		$data['gaji'] = $this->data->countAllGaji();
		$data['divisi'] = $this->data->countAllDivisi();
		$data['jabatan'] = $this->data->countAllJabatan();
		$data['kecamatan'] = $this->data->countAllkecamatan();
		$data['kota'] = $this->data->countAllKota();
		$data['provinsi'] = $this->data->countAllProvinsi();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('beranda', $data);
		$this->load->view('template/footer', $data);
	}

	public function peta()
	{
		$data['title'] = 'Pemetaan';
		$data['karyawan'] = $this->data->getAllKaryawan();
		$data['kecamatan'] = $this->data->getAllkecamatan();
		$data['kota'] = $this->data->getAllKota();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('pemetaan', $data);
		$this->load->view('template/footer', $data);
	}

	public function karyawan()
	{
		$data['title'] = 'Karyawan';
		$data['karyawan'] = $this->data->getAllKaryawan();
		$data['divisi'] = $this->data->getAllDivisi();
		$data['jabatan'] = $this->data->getAllJabatan();

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
