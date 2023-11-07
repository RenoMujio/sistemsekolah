<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Pegawai_model extends CI_Model {

    public function get_data()
    {
        return $this->db->get('pegawai')->result_array();
    }

    public function tambahDatapegawai()
    {
        $data = [
            "nama_pegawai" => $this->input->post('nama_pegawai', true),
            "tempat_lahir_pegawai" => $this->input->post('tempat_lahir_pegawai', true),
            "tanggal_lahir_pegawai" => $this->input->post('tanggal_lahir_pegawai', true),
            "agama_pegawai" => $this->input->post('agama_pegawai', true),
            "status_pegawai" => $this->input->post('status_pegawai', true)
        ];
        
        $this->db->insert('pegawai', $data);
    }

    public function getpegawaiById($Id)
    {
        return $this->db->get_where('pegawai', ['id_pegawai' => $Id])->row_array();
    }

    public function editDatapegawai()
    {
        $data = [
            "nama_pegawai" => $this->input->post('nama_pegawai', true),
            "tempat_lahir_pegawai" => $this->input->post('tempat_lahir_pegawai', true),
            "tanggal_lahir_pegawai" => $this->input->post('tanggal_lahir_pegawai', true),
            "agama_pegawai" => $this->input->post('agama_pegawai', true),
            "status_pegawai" => $this->input->post('status_pegawai', true)
        ];

        $this->db->where('id_pegawai', $this->input->post('id_pegawai'));
        $this->db->update('pegawai', $data);
    }

    public function hapusDatapegawai($Id) 
    {
        $this->db->where('id_pegawai', $Id);
        $this->db->delete('pegawai');
    }
}