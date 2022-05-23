<?php

class Nasabah_model extends CI_model {
    public function getAllNasabah()
    {
        return $this->db->get('nasabah')->result_array();
        // Untuk memanggil database dengan nama tabel nasabah dan dijadikan data array
    }
}