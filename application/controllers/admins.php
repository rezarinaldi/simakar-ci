<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admins extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Admin';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }
}

/* End of file admins.php */
