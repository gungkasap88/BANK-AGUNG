<?php

class Nasabah extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Untuk memanggil database agar dapat dipakai disemua method di dalam class nasabah//
        // $this->load->database();
        $this->load->model('Nasabah_model');                                                            //
        // Untuk memanggil database agar dapat dipakai disemua method di dalam class nasabah//
    }

    public function index()
    {
        $data['judul'] = 'Daftar Nasabah'; // Data yg disimpan di array otomatis jadi var ($judul)
        $data['nasabah'] = $this->Nasabah_model->getAllNasabah(); // Data yg disimpan di array otomatis jadi var ($nasabah)
        $this->load->view('templates/header.php', $data);
        $this->load->view('nasabah/index.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Nasabah';
        $this->load->view('templates/header.php', $data);
        $this->load->view('nasabah/tambah.php',);
        $this->load->view('templates/footer.php',);
    }
}