<?php

class Nasabah_model extends CI_model {
    public function getAllNasabah()
    {
        return $this->db->get('nasabah')->result_array();
        // Untuk memanggil database dengan nama tabel nasabah dan dijadikan data array
    }

    public function tambahDataNasabah()
    {
        $data = [
            "ktp" => $this->input->post('ktp', true), // true untuk menghindari sqlInjection
            "nama" => $this->input->post('nama', true), // true untuk menghindari sqlInjection
            "alamat" => $this->input->post('alamat', true), // true untuk menghindari sqlInjection
            "tempatlahir" => $this->input->post('tempatlahir', true), // true untuk menghindari sqlInjection
            "tanggal" => $this->input->post('tanggal', true), // true untuk menghindari sqlInjection
            "telp" => $this->input->post('telp', true) // true untuk menghindari sqlInjection
        ];

        $this->db->insert('nasabah', $data);

    }


    public function hapusDataNasabah($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('nasabah');
    }
}