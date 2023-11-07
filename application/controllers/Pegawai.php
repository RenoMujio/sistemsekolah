<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {


    public function __construct()
    {
        parent ::__construct();
        $this->load->model('Pegawai_model');
    }
     
    public function index()
    {

        $data['title'] = 'Pegawai';
        $data['pegawai'] = $this->Pegawai_model->get_data();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pegawai', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['pegawai'] = 'Form Tambah Data Pegawai';

		$this->form_validation->set_rules('nama_pegawai','nama','required');
		$this->form_validation->set_rules('tempat_lahir_pegawai','lahir','required');
		$this->form_validation->set_rules('tanggal_lahir_pegawai','tanggal','required');
		$this->form_validation->set_rules('agama_pegawai','agama','required');
		$this->form_validation->set_rules('status_pegawai','status','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('tambahpegawai', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pegawai_model->tambahDatapegawai();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pegawai');
        }
    }

    public function edit($Id)
    {
        $data['title'] = 'Form Edit Pegawai';
        $data['pegawai'] = $this->Pegawai_model->getPegawaiById($Id);
       
		$this->form_validation->set_rules('nama_pegawai','nama','required');
		$this->form_validation->set_rules('tempat_lahir_pegawai','lahir','required');
		$this->form_validation->set_rules('tanggal_lahir_pegawai','tanggal','required');
		$this->form_validation->set_rules('agama_pegawai','agama','required');
		$this->form_validation->set_rules('status_pegawai','status','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('editpegawai', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pegawai_model->editDatapegawai();
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('pegawai');
        }
    }

    public function hapus($Id)
    {
        $this->Pegawai_model->hapusDatapegawai($Id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pegawai');
    }

}