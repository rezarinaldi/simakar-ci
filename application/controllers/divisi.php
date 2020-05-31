<?php

defined('BASEPATH') or exit('No direct script access allowed');

class divisi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model', 'data');
        check_not_login();
    }

    public function index()
    {
        $data['title'] = 'Divisi';
        $data['divisi'] = $this->data->getAllDivisi();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('divisi/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Divisi';
        $data['divisi'] = $this->data->getAllDivisi();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('divisi/tambah', $data);
        $this->load->view('template/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Divisi';
        $data['divisi'] = $this->data->getDivisiById($id);
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('divisi/ubah', $data);
        $this->load->view('template/footer');
    }

    public function tambah_simpan()
    {
        $this->data->addDivisi();
        $this->session->set_flashdata('pesan', 'Ditambahkan');
        redirect('divisi');
    }

    public function ubah_simpan($id)
    {
        $this->data->updateDivisi($id);
        $this->session->set_flashdata('pesan', 'Diubah');
        redirect('divisi');
    }

    public function hapus($id)
    {
        $this->data->deleteDivisi($id);
        $this->session->set_flashdata('pesan', 'Dihapus');
        redirect('divisi');
    }
}

/* End of file divisi.php */
