<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {


    public function __construct()
    {
        parent ::__construct();
        $this->load->model('Siswa_model');
    }
     
    public function index()
    {

        $data['title'] = 'Siswa';
        $data['siswa'] = $this->Siswa_model->get_data();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('siswa', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['siswa'] = 'Form Tambah Data Siswa';

		$this->form_validation->set_rules('nama_siswa','siswa','required');
		$this->form_validation->set_rules('jk','Jk','required');
		$this->form_validation->set_rules('no_induk','induk','required');
		$this->form_validation->set_rules('tempat_lahir','lahir','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('tambahsiswa', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Siswa_model->tambahDataSiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('siswa');
        }
    }

    public function edit($Id)
    {
        $data['title'] = 'Form Edit siswa';
        $data['siswa'] = $this->Siswa_model->getdata_pribadiById($Id);
       
		$this->form_validation->set_rules('nama_siswa','siswa','required');
		$this->form_validation->set_rules('jk','Jk','required');
		$this->form_validation->set_rules('no_induk','induk','required');
		$this->form_validation->set_rules('tempat_lahir','lahir','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('editsiswa', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Siswa_model->editDatasiswa();
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('siswa');
        }
    }

    public function hapus($Id)
    {
        $this->Siswa_model->hapusDatasiswa($Id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('siswa');
    }
}