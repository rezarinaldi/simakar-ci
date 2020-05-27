<?php

defined('BASEPATH') or exit('No direct script access allowed');

class gaji extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model','data');
        check_not_login();
    }

    public function index()
    {
        $data['title'] = 'Gaji';
        $data['gaji'] = $this->gaji_m->getAllGaji();

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

    public function ubah($id)
    {
        $data['title'] = 'Gaji';
        $data['gaji'] = $this->gaji_m->getGajiById($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('gaji/ubah', $data);
        $this->load->view('template/footer');
    }

    public function tambah_simpan()
    {
        $this->gaji_m->addGaji();
        $this->session->set_flashdata('pesan', 'Ditambahkan');
        redirect('gaji');
    }

    public function ubah_simpan($id)
    {
        $this->gaji_m->updateGaji($id);
        $this->session->set_flashdata('pesan', 'Diubah');
        redirect('gaji');
    }

    public function hapus($id)
    {
        $this->gaji_m->deleteGaji($id);
        $this->session->set_flashdata('pesan', 'Dihapus');
        redirect('gaji');
    }
}

/* End of file gaji.php */
