<?php

defined('BASEPATH') or exit('No direct script access allowed');

class karyawan extends CI_Controller
{
    public function tambah()
    {
        $data['title'] = 'Karyawan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('karyawan/tambah', $data);
        $this->load->view('template/footer');
    }

    public function tambah_simpan()
    {
        $data['title'] = 'Karyawan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('karyawan/tambah', $data);
        $this->load->view('template/footer');
    }

    public function ubah()
    {
        $data['title'] = 'Karyawan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('karyawan/ubah', $data);
        $this->load->view('template/footer');
    }

    public function ubah_simpan()
    {
        $data['title'] = 'Karyawan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('karyawan/ubah', $data);
        $this->load->view('template/footer');
    }

    public function profil()
    {
        $data['title'] = 'Profil Karyawan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('karyawan/profil', $data);
        $this->load->view('template/footer');
    }

    public function hapus()
    {
    }
}

/* End of file karyawan.php */
