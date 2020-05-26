<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class divisi_m extends CI_Model
{
    private $_client;

    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8000/'
        ]);
    }

    ################################### MODEL DATA DIVISI #############################################

    public function getAllDivisi()
    {
        $response = $this->_client->request('GET', 'divisi/');
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function getDivisiById($id)
    {
        $response = $this->_client->request('GET', 'divisi/' . $id);
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function addDivisi()
    {
        $data = [
            'nama_divisi'          =>  $this->input->post('nama_divisi', true),
        ];

        $response = $this->_client->request('POST', 'divisi', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function updateDivisi($id)
    {
        $data = [
            'nama_divisi'           =>  $this->input->post('nama_divisi'),
        ];

        $response = $this->_client->request('PUT', 'divisi/' . $id, [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function deleteDivisi($id)
    {
        $response = $this->_client->request('DELETE', 'divisi/' . $id);
        $result = json_decode($response->getBody(), true);
        return $result;
    }
}

/* End of file divisi_m.php */
