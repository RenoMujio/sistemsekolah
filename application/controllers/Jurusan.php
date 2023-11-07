<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {


    public function __construct()
    {
        parent ::__construct();
        $this->load->model('Jurusan_model');
    }
     
    public function index()
    {

        $data['title'] = 'Jurusan';
        $data['jurusan'] = $this->Jurusan_model->get_data();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('jurusan', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['jurusan'] = 'Form Tambah Data Jurusan';

        $this->form_validation->set_rules('id_kelas','kelas','required');
		$this->form_validation->set_rules('nama_keahlian','Keahlian','required');
		$this->form_validation->set_rules('kaproli','kaproli','required');
		$this->form_validation->set_rules('deskripsi','deskripsi','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('tambahjurusan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Jurusan_model->tambahDatajurusan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('jurusan');
        }
    }

    public function edit($Id)
    {
        $data['title'] = 'Form Edit Jurusan';
        $data['jurusan'] = $this->Jurusan_model->getjurusanById($Id);
       
        $this->form_validation->set_rules('id_kelas','kelas','required');
		$this->form_validation->set_rules('nama_keahlian','Keahlian','required');
		$this->form_validation->set_rules('kaproli','kaproli','required');
		$this->form_validation->set_rules('deskripsi','deskripsi','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('editjurusan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Jurusan_model->editDatajurusan();
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('pegawai');
        }
    }

    public function hapus($Id)
    {
        $this->Jurusan_model->hapusDatajurusan($Id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kelas');
    }
}