<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Kelas_model');
    }

    public function index()
    {
        $data['judul'] = "Dashboard";
        $data['data_kelas'] = $this->Kelas_model->getAllKelas();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/admin/footer');
    }

    public function addKelas()
    {
        $this->form_validation->set_rules('nama_kelas', 'Nama kelas', 'required|trim');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] = "Tambah Data Kelas";

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('admin/tambah_kelas');
            $this->load->view('templates/admin/footer');
        } else {
            $this->modelAddKelas();
        }
    }

    public function editKelas()
    {
        $data['judul'] = "Edit Data Kelas";
        $data['data_kelas'] = $this->Kelas_model->getAllKelas();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/edit_kelas', $data);
        $this->load->view('templates/admin/footer');
    }

    public function modelEditKelas($id)
    {
        $this->Kelas_model->editKelas($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><strong>Selamat!</strong> data berhasil diubah</div>');
        redirect('admin/editKelas');
    }

    public function modelDeleteKelas($id)
    {
        $this->Kelas_model->deleteKelas($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><strong>Selamat!</strong> data berhasil dihapus</div>');
        redirect('admin/editKelas');
    }

    public function modelAddKelas()
    {
        $this->Kelas_model->addKelas();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><strong>Selamat!</strong> data berhasil ditambah</div>');
        redirect('admin');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
