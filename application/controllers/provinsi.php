<?php

defined('BASEPATH') or exit('No direct script access allowed');

class provinsi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Provinsi';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('provinsi/index', $data);
        $this->load->view('template/footer');
    }
}

/* End of file provinsi.php */
