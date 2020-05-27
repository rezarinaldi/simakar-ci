<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class provinsi_m extends CI_Model
{
    private $_client;

    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => 'http://simakar.000webhostapp.com/'
        ]);
    }
    ################################### MODEL DATA PROVINSI #############################################

    public function getAllProvinsi()
    {
        $response = $this->_client->request('GET', 'provinsi/');
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function getProvinsiById($id)
    {
        $response = $this->_client->request('GET', 'provinsi/' . $id);
        $result = json_decode($response->getBody(), true);
        return $result[0];
    }

    public function addProvinsi()
    {
        $data = [
            'nama_provinsi'          =>  $this->input->post('nama_provinsi', true),
        ];

        $response = $this->_client->request('POST', 'provinsi', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function updateProvinsi($id)
    {
        $data = [
            'nama_provinsi'          =>  $this->input->post('nama_provinsi', true),
        ];

        $response = $this->_client->request('PUT', 'provinsi/' . $id, [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function deleteProvinsi($id)
    {
        $response = $this->_client->request('DELETE', 'provinsi/' . $id);
        $result = json_decode($response->getBody(), true);
        return $result;
    }
}

/* End of file provinsi_m.php */
