<?php

defined('BASEPATH') or exit('No direct script access allowed');

class kecamatan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Kecamatan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('kecamatan/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Kecamatan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('kecamatan/tambah', $data);
        $this->load->view('template/footer');
    }

    public function ubah()
    {
        $data['title'] = 'Kecamatan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('kecamatan/ubah', $data);
        $this->load->view('template/footer');
    }

    public function hapus()
    {
        
    }
}

/* End of file kecamatan.php */
