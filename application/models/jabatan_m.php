<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class jabatan_m extends CI_Model
{
    private $_client;

    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => 'http://simakar.000webhostapp.com/'
        ]);
    }
    ################################### MODEL DATA JABATAN #############################################

    public function getAllJabatan()
    {
        $response = $this->_client->request('GET', 'jabatan/');
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function getJabatanById($id)
    {
        $response = $this->_client->request('GET', 'jabatan/' . $id);
        $result = json_decode($response->getBody(), true);
        return $result[0];
    }

    public function addJabatan()
    {
        $data = [
            'nama_jabatan'          =>  $this->input->post('nama_jabatan', true),
        ];

        $response = $this->_client->request('POST', 'jabatan', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function updateJabatan($id)
    {
        $data = [
            'nama_jabatan'          =>  $this->input->post('nama_jabatan', true),
        ];

        $response = $this->_client->request('PUT', 'jabatan/' . $id, [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function deleteJabatan($id)
    {
        $response = $this->_client->request('DELETE', 'jabatan/' . $id);
        $result = json_decode($response->getBody(), true);
        return $result;
    }
}

/* End of file jabatan_m.php */
