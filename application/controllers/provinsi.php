<?php

defined('BASEPATH') or exit('No direct script access allowed');

class provinsi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Provinsi';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('provinsi/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Provinsi';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('provinsi/tambah', $data);
        $this->load->view('template/footer');
    }

    public function ubah()
    {
        $data['title'] = 'Provinsi';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('provinsi/ubah', $data);
        $this->load->view('template/footer');
    }

    public function hapus()
    {
        
    }
}

/* End of file provinsi.php */
