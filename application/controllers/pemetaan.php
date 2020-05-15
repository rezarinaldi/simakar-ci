<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class pemetaan extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Pemetaan';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('pemetaan', $data);
        $this->load->view('template/footer');
    }
}

/* End of file pemetaan.php */
