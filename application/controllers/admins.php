<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admins extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Admin';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Admin';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/tambah', $data);
        $this->load->view('template/footer');
    }

    public function ubah()
    {
        $data['title'] = 'Admin';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/ubah', $data);
        $this->load->view('template/footer');
    }

    public function profil()
    {
        $data['title'] = 'Profil Admin';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/profil', $data);
        $this->load->view('template/footer');
    }

    public function hapus()
    {
    }
}

/* End of file admins.php */
