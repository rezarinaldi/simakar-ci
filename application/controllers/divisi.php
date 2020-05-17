<?php

defined('BASEPATH') or exit('No direct script access allowed');

class divisi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Divisi';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('divisi/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Divisi';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('divisi/tambah', $data);
        $this->load->view('template/footer');
    }

    public function ubah()
    {
        $data['title'] = 'Divisi';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('divisi/ubah', $data);
        $this->load->view('template/footer');
    }

    public function hapus()
    {
        
    }
}

/* End of file divisi.php */
