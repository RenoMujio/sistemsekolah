<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {


    public function __construct()
    {
        parent ::__construct();
        $this->load->model('Kelas_model');
    }
     
    public function index()
    {

        $data['title'] = 'Kelas';
        $data['kelas'] = $this->Kelas_model->get_data();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('kelas', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['kelas'] = 'Form Tambah Data Kelas';

		$this->form_validation->set_rules('id_keahlian','keahlian','required');
		$this->form_validation->set_rules('kode_kelas','kode','required');
		$this->form_validation->set_rules('nama_kelas','kelas','required');
		$this->form_validation->set_rules('wali_kelas','wali','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('tambahkelas', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kelas_model->tambahDataKelas();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('siswa');
        }
    }

    public function edit($Id)
    {
        $data['title'] = 'Form Edit Kelas';
        $data['kelas'] = $this->Kelas_model->getkelasById($Id);
       
        $this->form_validation->set_rules('id_keahlian','keahlian','required');
		$this->form_validation->set_rules('kode_kelas','kode','required');
		$this->form_validation->set_rules('nama_kelas','kelas','required');
		$this->form_validation->set_rules('wali_kelas','wali','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('editkelas', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kelas_model->editDatakelas();
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('kelas');
        }
    }

    public function hapus($Id)
    {
        $this->Kelas_model->hapusDatakelas($Id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kelas');
    }
}