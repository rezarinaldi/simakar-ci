<?php

defined('BASEPATH') or exit('No direct script access allowed');

class kt_kb extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Kota dan Kabupaten';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('kt_kb/index', $data);
        $this->load->view('template/footer');
    }
}

/* End of file kt_kb.php */
