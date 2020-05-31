<?php

defined('BASEPATH') or exit('No direct script access allowed');

class kt_kb extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model', 'data');
        check_not_login();
    }

    public function index()
    {
        $data['title'] = 'Kota dan Kabupaten';
        $data['kota'] = $this->data->getAllKota();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('kt_kb/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Kota dan Kabupaten';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('kt_kb/tambah', $data);
        $this->load->view('template/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Kota dan Kabupaten';
        $data['kota'] = $this->data->getKotaById($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('kt_kb/ubah', $data);
        $this->load->view('template/footer');
    }

    public function tambah_simpan()
    {

        $data['kota'] = $this->data->addKota();

        $this->session->set_flashdata('pesan', 'Ditambahkan');
        redirect('kt_kb');
    }

    public function ubah_simpan($id)
    {
        $data['kota'] = $this->data->updateKota($id);
        $this->session->set_flashdata('pesan', 'Diubah');
        redirect('kt_kb');
    }

    public function hapus($id)
    {

        $data['kota'] = $this->data->deleteKota($id);

        $this->session->set_flashdata('pesan', 'Dihapus');
        redirect('kt_kb');
    }
}

/* End of file kt_kb.php */
