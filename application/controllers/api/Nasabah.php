<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class Nasabah extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Untuk memanggil database agar dapat dipakai disemua method di dalam class nasabah//
        // $this->load->database();
        $this->load->model('Nasabah_model', 'nasabah');

        // Menambahkan flashdata pada autoload, karna digunakan di setiap halaman
    }

    public function index_get()
    {

        $id = $this->get('id');
        if ( $id === null ) {
            $nasabah = $this->nasabah->getNasabah();
        } else {
            $nasabah = $this->nasabah->getNasabah($id);
        }

        if ( $nasabah ) {
            $this->response([
                'status' => true,
                'data' => $nasabah
            ], REST_Controller::HTTP_OK);
        }
    }
}