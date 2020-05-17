<?php

defined('BASEPATH') or exit('No direct script access allowed');

class kt_kb extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Kota dan Kabupaten';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('kt_kb/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Kota dan Kabupaten';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('kt_kb/tambah', $data);
        $this->load->view('template/footer');
    }

    public function ubah()
    {
        $data['title'] = 'Kota dan Kabupaten';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('kt_kb/ubah', $data);
        $this->load->view('template/footer');
    }

    public function hapus()
    {
        
    }
}

/* End of file kt_kb.php */
