<?php

defined('BASEPATH') or exit('No direct script access allowed');

class kecamatan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Kecamatan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('kecamatan/index', $data);
        $this->load->view('template/footer');
    }
}

/* End of file kecamatan.php */
