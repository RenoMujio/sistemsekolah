<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Jurusan_model extends CI_Model {

    public function get_data()
    {
        return $this->db->get('konsentrasi_keahlian')->result_array();
    }

    public function tambahDatajurusan()
    {
        $data = [
            "id_kelas" => $this->input->post('id_kelas', true),
            "nama_keahlian" => $this->input->post('nama_keahlian', true),
            "kaproli" => $this->input->post('kaproli', true),
            "deskripsi" => $this->input->post('deskripsi', true)
        ];
        
        $this->db->insert('konsentrasi_keahlian', $data);
    }

    public function getjurusanById($Id)
    {
        return $this->db->get_where('konsentrasi_keahlian', ['id_keahlian' => $Id])->row_array();
    }

    public function editDatajurusan()
    {
        $data = [
            "id_kelas" => $this->input->post('id_kelas', true),
            "nama_keahlian" => $this->input->post('nama_keahlian', true),
            "kaproli" => $this->input->post('kaproli', true),
            "deskripsi" => $this->input->post('deskripsi', true)
        ];

        $this->db->where('id_keahlian', $this->input->post('id_keahlian'));
        $this->db->update('konsentrasi_keahlian', $data);
    }

    public function hapusDatajurusan($Id) 
    {
        $this->db->where('id_keahlian', $Id);
        $this->db->delete('konsentrasi_keahlian');
    }
}