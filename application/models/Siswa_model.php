<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Siswa_model extends CI_Model {

    public function get_data()
    {
        return $this->db->get('data_pribadi')->result_array();
    }

    public function tambahDataSiswa()
    {
        $data = [
            "nama_siswa" => $this->input->post('nama_siswa', true),
            "jk" => $this->input->post('jk', true),
            "no_induk" => $this->input->post('no_induk', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true)
        ];
        
        $this->db->insert('data_pribadi', $data);
    }

    public function getdata_pribadiById($Id)
    {
        return $this->db->get_where('data_pribadi', ['Id_siswa' => $Id])->row_array();
    }

    public function editDatasiswa()
    {
        $data = [
            "nama_siswa" => $this->input->post('nama_siswa', true),
            "jk" => $this->input->post('jk', true),
            "no_induk" => $this->input->post('no_induk', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true)
        ];

        $this->db->where('id_siswa', $this->input->post('id_siswa'));
        $this->db->update('data_pribadi', $data);
    }

    public function hapusDatasiswa($Id) 
    {
        $this->db->where('id_siswa', $Id);
        $this->db->delete('data_pribadi');
    }
}