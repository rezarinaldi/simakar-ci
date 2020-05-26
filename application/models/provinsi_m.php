<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
use GuzzleHttp\Client;

class provinsi_m extends CI_Model 
{
    private $_client;

    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8000/'
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
        $response = $this->_client->request('GET', 'provinsi/'.$id);
        $result = json_decode($response->getBody(), true);
        return $result[0];
    }

    public function addProvinsi()
    {
        $data = [
           
        ];

        $response = $this->_client->request('POST', 'provinsi', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function updateProvinsi()
    {
        $data = [
            
        ];

        $response = $this->_client->request('PUT', 'provinsi', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function deleteProvinsi($id)
    {
        $response = $this->_client->request('DELETE', 'provinsi/'.$id);
        $result = json_decode($response->getBody(), true);
        return $result;
    }
}

/* End of file provinsi_m.php */
