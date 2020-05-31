<?php

defined('BASEPATH') or exit('No direct script access allowed');

class jabatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model', 'data');
        check_not_login();
    }

    public function index()
    {
        $data['title'] = 'Jabatan';
        $data['jabatan'] = $this->data->getAllJabatan();
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

    public function ubah($id)
    {
        $data['title'] = 'Jabatan';
        $data['jabatan'] = $this->data->getJabatanById($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('jabatan/ubah', $data);
        $this->load->view('template/footer');
    }

    public function tambah_simpan()
    {

        $data['jabatan'] = $this->data->addJabatan();

        $this->session->set_flashdata('pesan', 'Ditambahkan');
        redirect('jabatan');
    }

    public function ubah_simpan($id)
    {

        $data['jabatan'] = $this->data->updateJabatan($id);
        $this->session->set_flashdata('pesan', 'Diubah');
        redirect('jabatan');
    }

    public function hapus($id)
    {

        $data['jabatan'] = $this->data->deleteJabatan($id);
        $this->session->set_flashdata('pesan', 'Dihapus');
        redirect('jabatan');
    }
}

/* End of file jabatan.php */
