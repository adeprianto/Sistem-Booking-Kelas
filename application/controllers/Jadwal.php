<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Matkul_model');
        $this->load->model('Kelas_model');
        $this->load->model('Jadwal_model');
    }

    public function addJadwal()
    {
        $this->form_validation->set_rules('waktu_mulai', 'Waktu mulai', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] = "Tambah Jadwal Mata Kuliah";
            $data['data_matkul'] = $this->Matkul_model->getAllMatkul();
            $data['data_kelas'] = $this->Kelas_model->getAllKelas();

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('templates/admin/topbar');
            $this->load->view('admin/tambah_jadwal', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->modelAddJadwal();
        }
    }

    public function editJadwal()
    {
        $data['judul'] = "Edit Jadwal Mata Kuliah";
        $data['data_jadwal'] = $this->Jadwal_model->getAllJadwal();
        $data['data_matkul'] = $this->Matkul_model->getAllMatkul();
        $data['data_kelas'] = $this->Kelas_model->getAllKelas();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/edit_jadwal', $data);
        $this->load->view('templates/admin/footer');
    }

    public function modelAddJadwal()
    {
        $this->Jadwal_model->addJadwal();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><strong>Selamat!</strong> data berhasil ditambah</div>');
        redirect('admin');
    }

    public function modelEditJadwal($id)
    {
        $this->Jadwal_model->editJadwal($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><strong>Selamat!</strong> data berhasil diubah</div>');
        redirect('jadwal/editJadwal');
    }

    public function modelDeleteJadwal($id)
    {
        $this->Jadwal_model->deleteJadwal($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><strong>Selamat!</strong> data berhasil dihapus</div>');
        redirect('jadwal/editJadwal');
    }
}
