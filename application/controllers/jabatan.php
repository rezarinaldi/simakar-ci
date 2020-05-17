<?php

defined('BASEPATH') or exit('No direct script access allowed');

class jabatan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Jabatan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('jabatan/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Jabatan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('jabatan/tambah', $data);
        $this->load->view('template/footer');
    }

    public function ubah()
    {
        $data['title'] = 'Jabatan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('jabatan/ubah', $data);
        $this->load->view('template/footer');
    }

    public function hapus()
    {
    }
}

/* End of file jabatan.php */
