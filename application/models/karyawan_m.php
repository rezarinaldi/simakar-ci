<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class karyawan_m extends CI_Model
{
   
    private $_client;

    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8000/'
        ]);
    }

    ################################### MODEL DATA KARYAWAN #############################################


    public function getAllKaryawan()
    {
        $response = $this->_client->request('GET', 'karyawan/');
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function getKaryawanById($id)
    {
        $response = $this->_client->request('GET', 'karyawan/'.$id);
        $result = json_decode($response->getBody(), true);
        return $result[0];
    }

    public function addKaryawan()
    {
        $data = [
            'nama'          =>  $this->input->post('nama', true),
            'email'         =>  $this->input->post('email', true),
            'no_hp'         =>  $this->input->post('no_hp', true),
            'alamat'        =>  $this->input->post('alamat', true),
            'gender'        =>  $this->input->post('gender', true),
            'tanggal_masuk' =>  $this->input->post('tanggal_masuk',true),
            'tanggal_lahir' =>  $this->input->post('tanggal_lahir',true),
            'id_jabatan'    =>  $this->input->post('id_jabatan', true),
            'id_provinsi'   =>  $this->input->post('id_provinsi'),
            'id_kecamatan'  =>  $this->input->post('id_kecamatan'),
            'id_kt_kb'      =>  $this->input->post('id_kt_kb'),
            'id_divisi'     =>  $this->input->post('id_divisi'),
            'id_gaji'       =>  $this->input->post('id_gaji'),
            'umur'          =>  $this->input->post('umur'),
            'gambar'        =>  $this->input->post('gambar'),
            'latitude'      =>  $this->input->post('latitude'),
            'longitude'     =>  $this->input->post('longitude'),
            'ket'           =>  $this->input->post('ket'),
        ];

        // var_dump($data);die();

        $response = $this->_client->request('POST', 'karyawan', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function updateKaryawan($id)
    {
        $data = [
            'nama'          =>  $this->input->post('nama', true),
            'email'         =>  $this->input->post('email', true),
            'no_hp'         =>  $this->input->post('no_hp', true),
            'alamat'        =>  $this->input->post('alamat', true),
            'gender'        =>  $this->input->post('gender', true),
            'tanggal_masuk' =>  $this->input->post('tanggal_masuk', true),
            'tanggal_lahir' =>  $this->input->post('tanggal_lahir', true),
            'id_jabatan'    =>  $this->input->post('id_jabatan', true),
            'id_provinsi'   =>  $this->input->post('id_provinsi'),
            'id_kecamatan'  =>  $this->input->post('id_kecamatan'),
            'id_kt_kb'      =>  $this->input->post('id_kt_kb'),
            'id_divisi'     =>  $this->input->post('id_divisi'),
            'id_gaji'       =>  $this->input->post('id_gaji'),
            'umur'          =>  $this->input->post('umur'),
            'gambar'        =>  $this->input->post('gambar'),
            'latitude'      =>  $this->input->post('latitude'),
            'longitude'     =>  $this->input->post('longitude'),
            'ket'           =>  $this->input->post('ket'),
        ];

        $response = $this->_client->request('PUT', 'karyawan/'.$id, [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function deleteKaryawan($id)
    {
        $response = $this->_client->request('DELETE', 'karyawan/'.$id);
        $result = json_decode($response->getBody(), true);
        return $result;
    }
}


/* End of file karyawan_m.php */
