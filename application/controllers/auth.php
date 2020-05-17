<?php

defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function login()
    {
        $data['title'] = 'Login';

        if ($this->session->userdata('status') == null) {
            $this->load->view('login', $data);
        } else {
            redirect('menu');
        }
    }

    public function proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username == 'adminsimakar' && $password == 'admin12345678') {

            $data_session = array(
                'nama' => $username,
                'status' => 'login'
            );

            $this->session->set_userdata($data_session);

            echo    "<script>
                    alert('Selamat, login berhasil.');
                    window.location='" . site_url('menu') . "';
                    </script>";
        } else {
            $this->session->set_flashdata('pesan', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            username atau password Anda salah!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('status');
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-info alert-dismissible fade show" role="alert">
        Anda telah keluar!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('auth/login');
    }
}

/* End of file auth.php */
