<?php

defined('BASEPATH') or exit('No direct script access allowed');

class provinsi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model', 'data');
        check_not_login();
    }

    public function index()
    {
        $data['title'] = 'Provinsi';
        $data['provinsi'] = $this->data->getAllProvinsi();
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

    public function ubah($id)
    {
        $data['title'] = 'Provinsi';
        $data['provinsi'] = $this->data->getProvinsiById($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('provinsi/ubah', $data);
        $this->load->view('template/footer');
    }

    public function tambah_simpan()
    {
        $data['provinsi'] = $this->data->addProvinsi();
        $this->session->set_flashdata('pesan', 'Ditambahkan');
        redirect('provinsi');
    }

    public function ubah_simpan($id)
    {
        $data['provinsi'] = $this->data->updateProvinsi($id);
        $this->session->set_flashdata('pesan', 'Diubah');
        redirect('provinsi');
    }

    public function hapus($id)
    {
        $data['provinsi'] = $this->data->deleteProvinsi($id);
        $this->session->set_flashdata('pesan', 'Dihapus');
        redirect('provinsi');
    }
}

/* End of file provinsi.php */
