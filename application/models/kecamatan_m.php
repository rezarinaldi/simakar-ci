<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class kecamatan_m extends CI_Model
{
    private $_client;

    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8000/'
        ]);
    }
    ################################### MODEL DATA KECAMATAN #############################################

    public function getAllKecamatan()
    {
        $response = $this->_client->request('GET', 'kecamatan/');
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function getKecamatanById($id)
    {
        $response = $this->_client->request('GET', 'kecamatan/' . $id);
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function addKecamatan()
    {
        $data = [
            'nama_kecamatan'          =>  $this->input->post('nama_kecamatan', true),
        ];

        $response = $this->_client->request('POST', 'kecamatan', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function updateKecamatan($id)
    {
        $data = [
            'nama_kecamatan'          =>  $this->input->post('nama_kecamatan', true),
        ];

        $response = $this->_client->request('PUT', 'kecamatan/' . $id, [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function deleteKecamatan($id)
    {
        $response = $this->_client->request('DELETE', 'kecamatan/' . $id);
        $result = json_decode($response->getBody(), true);
        return $result;
    }
}

/* End of file kecamatan_m.php */
