<?php

defined('BASEPATH') or exit('No direct script access allowed');

class gaji extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Gaji';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('gaji/index', $data);
        $this->load->view('template/footer');
    }
}

/* End of file gaji.php */
