<?php

defined('BASEPATH') or exit('No direct script access allowed');

class tentang extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Tentang';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('tentang', $data);
        $this->load->view('template/footer');
    }
}

/* End of file tentang.php */
