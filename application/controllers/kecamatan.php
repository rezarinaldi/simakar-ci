<?php

defined('BASEPATH') or exit('No direct script access allowed');

class kecamatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model','data');
        check_not_login();
    }

    public function index()
    {
        $data['title'] = 'Kecamatan';
        $data['kecamatan'] = $this->data->getAllKecamatan();
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

    public function ubah($id)
    {
        $data['title'] = 'Kecamatan';
        $data['kecamatan'] = $this->data->getKecamatanById($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('kecamatan/ubah', $data);
        $this->load->view('template/footer');
    }

    public function tambah_simpan()
    {
        $data['kecamatan'] = $this->data->addKecamatan();
        $this->session->set_flashdata('pesan', 'Ditambahkan');
        redirect('kecamatan');
    }

    public function ubah_simpan($id)
    {
        $data['kecamatan'] = $this->data->updateKecamatan($id);
        $this->session->set_flashdata('pesan', 'Diubah');
        redirect('kecamatan');
    }

    public function hapus($id)
    {
        $data['kecamatan'] = $this->data->deleteKecamatan($id);
        $this->session->set_flashdata('pesan', 'Dihapus');
        redirect('kecamatan');
    }
}

/* End of file kecamatan.php */
