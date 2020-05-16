<?php

defined('BASEPATH') or exit('No direct script access allowed');

class beranda extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Beranda';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('beranda', $data);
        $this->load->view('template/footer');
    }
}

/* End of file beranda.php */
