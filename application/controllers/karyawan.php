<?php

defined('BASEPATH') or exit('No direct script access allowed');

class karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model', 'data');
        check_not_login();
    }

    public function tambah()
    {
        $data['title'] = 'Karyawan';
        $data['gaji'] = $this->data->getAllGaji();
        $data['divisi'] = $this->data->getAllDivisi();
        $data['jabatan'] = $this->data->getAllJabatan();
        $data['kecamatan'] = $this->data->getAllkecamatan();
        $data['kota'] = $this->data->getAllKota();
        $data['provinsi'] = $this->data->getAllProvinsi();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('karyawan/tambah', $data);
        $this->load->view('template/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Karyawan';
        $data['karyawan'] = $this->data->getKaryawanById($id);
        $data['gaji'] = $this->data->getAllGaji();
        $data['divisi'] = $this->data->getAllDivisi();
        $data['jabatan'] = $this->data->getAllJabatan();
        $data['kecamatan'] = $this->data->getAllkecamatan();
        $data['kota'] = $this->data->getAllKota();
        $data['provinsi'] = $this->data->getAllProvinsi();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('karyawan/ubah', $data);
        $this->load->view('template/footer', $data);
    }

    public function tambah_simpan()
    {
        // UPLOAD GAMBAR
        $upload = $_FILES['gambar']['name'];

        if ($upload) {
            # code...
            $config['upload_path'] = './assets/img/avatar/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size']     = '2048';
            $config['overwrite']     = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $newImage = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('flash-error', "Periksa kembali file yang Anda upload");
                redirect('karyawan/tambah');
            }
        }
        $this->data->addKaryawan();
        $this->session->set_flashdata('pesan', 'Ditambahkan');
        redirect('menu/karyawan');
    }

    public function ubah_simpan($id)
    {
        $data = $this->data->getKaryawanById($id);
        $upload = $_FILES['gambar']['name'];
        if ($upload) {
            # code...
            $config['upload_path'] = './assets/img/avatar/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size']     = '2048';
            $config['overwrite']     = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $oldImage = $data['gambar'];
                if ($oldImage != 'avatar-1.png') {
                    # code...
                    unlink(FCPATH . 'assets/img/avatar/' . $oldImage);
                }

                $newImage = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('flash-error', "Periksa kembali file yang Anda upload");
                redirect('karyawan/ubah');
            }
        }

        $this->data->updateKaryawan($id);
        $this->session->set_flashdata('pesan', 'Diubah');
        redirect('menu/karyawan');
    }

    public function profil($id)
    {
        $data['title'] = 'Profil Karyawan';
        $data['karyawan'] = $this->data->getKaryawanById($id);
        $data['gaji'] = $this->data->getAllGaji();
        $data['divisi'] = $this->data->getAllDivisi();
        $data['jabatan'] = $this->data->getAllJabatan();
        $data['kecamatan'] = $this->data->getAllkecamatan();
        $data['kota'] = $this->data->getAllKota();
        $data['provinsi'] = $this->data->getAllProvinsi();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('karyawan/profil', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id)
    {
        $this->data->deleteKaryawan($id);
        $this->session->set_flashdata('pesan', 'Dihapus');
        redirect('menu/karyawan');
    }
}

/* End of file karyawan.php */
