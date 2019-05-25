<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Matkul_model');
    }

    public function addMatkul()
    {
        $this->form_validation->set_rules('kode_matkul', 'Kode Mata Kuliah', 'required|trim|is_unique[t_matkul.kode_matkul]', array('is_unique' => 'Kode matkul sudah ada'));
        $this->form_validation->set_rules('nama_matkul', 'Nama Mata Kuliah', 'required|trim');
        $this->form_validation->set_rules('nama_dosen', 'Nama Dosen Pengajar', 'required|trim');
        $this->form_validation->set_rules('sks', 'SKS', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] = "Tambah Mata Kuliah";

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('admin/tambah_matkul');
            $this->load->view('templates/admin/footer');
        } else {
            $this->modelAddMatkul();
        }
    }

    public function editMatkul()
    {
        $data['judul'] = "Edit Mata Kuliah";
        $data['data_matkul'] = $this->Matkul_model->getAllMatkul();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/edit_matkul', $data);
        $this->load->view('templates/admin/footer');
    }

    public function modelAddMatkul()
    {
        $this->Matkul_model->addMatkul();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><strong>Selamat!</strong> data berhasil ditambah</div>');
        redirect('admin');
    }

    public function modelEditMatkul($id)
    {
        $this->Matkul_model->editMatkul($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><strong>Selamat!</strong> data berhasil diubah</div>');
        redirect('matkul/editMatkul');
    }

    public function modelDeleteMatkul($id)
    {
        $this->Matkul_model->deleteMatkul($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><strong>Selamat!</strong> data berhasil dihapus</div>');
        redirect('matkul/editMatkul');
    }
}
