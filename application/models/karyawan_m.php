<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class karyawan_m extends CI_Model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/simakar-ci/rest-server/public/karyawan'
        ]);
    }


}


/* End of file karyawan_m.php */
