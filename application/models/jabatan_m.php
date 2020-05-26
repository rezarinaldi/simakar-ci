<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
use GuzzleHttp\Client;

class jabatan_m extends CI_Model 
{

    private $_client;

    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8000/'
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
        $response = $this->_client->request('GET', 'jabatan/'.$id);
        $result = json_decode($response->getBody(), true);
        return $result[0];
    }

    public function addJabatan()
    {
        $data = [
           
        ];

        $response = $this->_client->request('POST', 'jabatan', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function updateJabatan()
    {
        $data = [
            
        ];

        $response = $this->_client->request('PUT', 'jabatan', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function deleteJabatan($id)
    {
        $response = $this->_client->request('DELETE', 'Jabatan/'.$id);
        $result = json_decode($response->getBody(), true);
        return $result;
    }
}

/* End of file jabatan_m.php */
