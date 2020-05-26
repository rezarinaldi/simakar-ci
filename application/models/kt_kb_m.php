<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class kt_kb_m extends CI_Model
{
    private $_client;

    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8000/'
        ]);
    }
    ################################### MODEL DATA KOTA KABUPATEN #############################################

    public function getAllKota()
    {
        $response = $this->_client->request('GET', 'kota/');
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function getKotaById($id)
    {
        $response = $this->_client->request('GET', 'kota/' . $id);
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function addKota()
    {
        $data = [
            'nama_kt_kb'          =>  $this->input->post('nama_kt_kb', true),
            'kode_pos'          =>  $this->input->post('kode_pos', true),
        ];

        $response = $this->_client->request('POST', 'kota', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function updateKota($id)
    {
        $data = [
            'nama_kt_kb'          =>  $this->input->post('nama_kt_kb', true),
            'kode_pos'          =>  $this->input->post('kode_pos', true),
        ];

        $response = $this->_client->request('PUT', 'kota/' . $id, [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function deleteKota($id)
    {
        $response = $this->_client->request('DELETE', 'kota/' . $id);
        $result = json_decode($response->getBody(), true);
        return $result;
    }
}

/* End of file kt_kb_m.php */
