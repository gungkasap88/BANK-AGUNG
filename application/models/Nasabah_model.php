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

        // Untuk mebuat code seperti diatas, tetapi lebih singkat
        // $this->db->delete('nasabah', ['id' => $id]);
    }

    public function getNasabahById($id)
    {
        return $this->db->get_where('nasabah', ['id' => $id])->row_array();
    }

    public function ubahDataNasabah()
    {
        $data = [
            "ktp" => $this->input->post('ktp', true), // true untuk menghindari sqlInjection
            "nama" => $this->input->post('nama', true), // true untuk menghindari sqlInjection
            "alamat" => $this->input->post('alamat', true), // true untuk menghindari sqlInjection
            "tempatlahir" => $this->input->post('tempatlahir', true), // true untuk menghindari sqlInjection
            "tanggal" => $this->input->post('tanggal', true), // true untuk menghindari sqlInjection
            "telp" => $this->input->post('telp', true) // true untuk menghindari sqlInjection
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('nasabah', $data);

    }

    public function cariDataNasabah()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('ktp', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('alamat', $keyword);
        return $this->db->get('nasabah')->result_array();
    }


}