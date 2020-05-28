<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Data_model extends CI_Model
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
        $response = $this->_client->request('GET', 'karyawan/' . $id);
        $result = json_decode($response->getBody(), true);
        return $result[0];
    }

    public function addKaryawan()
    {
        $img = $_FILES['gambar']['name'];
        if($img){
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
                'gambar'        =>  $img,
                'latitude'      =>  $this->input->post('latitude'),
                'longitude'     =>  $this->input->post('longitude'),
                'ket'           =>  $this->input->post('ket'),
            ];
        }else{
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
                'gambar'        =>  'avatar-1.png',
                'latitude'      =>  $this->input->post('latitude'),
                'longitude'     =>  $this->input->post('longitude'),
                'ket'           =>  $this->input->post('ket'),
            ];
        }
        
        $response = $this->_client->request('POST', 'karyawan', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function updateKaryawan($id)
    {
        $img = $_FILES['gambar']['name'];
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
            'gambar'        =>  $img,
            'latitude'      =>  $this->input->post('latitude'),
            'longitude'     =>  $this->input->post('longitude'),
            'ket'           =>  $this->input->post('ket'),
        ];

        $response = $this->_client->request('PUT', 'karyawan/' . $id, [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function deleteKaryawan($id)
    {
        $response = $this->_client->request('DELETE', 'karyawan/' . $id);
        $result = json_decode($response->getBody(), true);
        return $result;
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

     ################################### MODEL DATA GAJI #############################################

    public function getAllGaji()
    {
        $response = $this->_client->request('GET', 'gaji/');
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function getGajiById($id)
    {
        $response = $this->_client->request('GET', 'gaji/' . $id);
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function addGaji()
    {
        $data = [
            'jumlah_gaji'          =>  $this->input->post('jumlah_gaji', true),
        ];

        $response = $this->_client->request('POST', 'gaji', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function updateGaji($id)
    {
        $data = [
            'jumlah_gaji'          =>  $this->input->post('jumlah_gaji', true),
        ];

        $response = $this->_client->request('PUT', 'gaji/' . $id, [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function deleteGaji($id)
    {
        $response = $this->_client->request('DELETE', 'gaji/' . $id);
        $result = json_decode($response->getBody(), true);
        return $result;
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
        return $result;
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
        return $result;
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


/* End of file karyawan_m.php */
