<?php

defined('BASEPATH') or exit('No direct script access allowed');

class gaji extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Gaji';
        $data['gaji'] = $this->gaji_m->getAll();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('gaji/index', $data);
        $this->load->view('template/footer');
    }
    
    public function tambah()
    {
        $data['title'] = 'Gaji';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('gaji/tambah', $data);
        $this->load->view('template/footer');
    }

    public function ubah()
    {
        $data['title'] = 'Gaji';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('gaji/ubah', $data);
        $this->load->view('template/footer');
    }

    public function hapus()
    {
        
    }
}

/* End of file gaji.php */
