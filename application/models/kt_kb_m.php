<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
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
        $response = $this->_client->request('GET', 'kota/'.$id);
        $result = json_decode($response->getBody(), true);
        return $result[0];
    }

    public function addKota()
    {
        $data = [
           
        ];

        $response = $this->_client->request('POST', 'kota', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function updateKota()
    {
        $data = [
            
        ];

        $response = $this->_client->request('PUT', 'kota', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function deleteKota($id)
    {
        $response = $this->_client->request('DELETE', 'kota/'.$id);
        $result = json_decode($response->getBody(), true);
        return $result;
    }
}

/* End of file kt_kb_m.php */
