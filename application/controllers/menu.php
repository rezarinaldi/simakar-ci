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

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('beranda', $data);
		$this->load->view('template/footer');
	}

	public function peta()
	{
		$data['title'] = 'Pemetaan';

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('pemetaan', $data);
		$this->load->view('template/footer');
	}

	public function karyawan()
	{
		$data['title'] = 'Karyawan';

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
