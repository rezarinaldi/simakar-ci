<?php

defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function login()
    {
        $data['title'] = 'Login';

        $this->load->view('login', $data);
    }
}

/* End of file auth.php */
