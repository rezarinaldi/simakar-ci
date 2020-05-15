<?php

defined('BASEPATH') or exit('No direct script access allowed');

class karyawan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Karyawan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('karyawan/index', $data);
        $this->load->view('template/footer');
    }

    public function laporan()
    {
        $data['title'] = 'Laporan Data Karyawan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('template/footer');
    }

    public function laporan_filter()
    {
        $data['title'] = 'Laporan Data Karyawan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('laporan/filter', $data);
        $this->load->view('template/footer');
    }

    public function laporan_print()
    {
        $data['title'] = 'Laporan Data Karyawan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('laporan/print', $data);
        $this->load->view('template/footer');
    }
}

/* End of file karyawan.php */
