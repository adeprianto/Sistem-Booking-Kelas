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
        $data['data_matkul'] = $this->Kelas_model->getAllMatkul();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/admin/footer');
    }

    public function addKelas()
    {
        $this->form_validation->set_rules('nama_kelas', 'Nama kelas', 'required|trim|is_unique[t_ruangan.nama_ruangan]', array('is_unique' => 'Nama ruangan/kelas sudah ada'));
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
        $data['data_matkul'] = $this->Kelas_model->getAllMatkul();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/edit_matkul', $data);
        $this->load->view('templates/admin/footer');
    }

    public function modelAddKelas()
    {
        $this->Kelas_model->addKelas();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><strong>Selamat!</strong> data berhasil ditambah</div>');
        redirect('admin');
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

    public function modelAddMatkul()
    {
        $this->Kelas_model->addMatkul();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><strong>Selamat!</strong> data berhasil ditambah</div>');
        redirect('admin');
    }

    public function modelEditMatkul($id)
    {
        $this->Kelas_model->editMatkul($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><strong>Selamat!</strong> data berhasil diubah</div>');
        redirect('admin/editMatkul');
    }

    public function modelDeleteMatkul($id)
    {
        $this->Kelas_model->deleteMatkul($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><strong>Selamat!</strong> data berhasil dihapus</div>');
        redirect('admin/editMatkul');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
