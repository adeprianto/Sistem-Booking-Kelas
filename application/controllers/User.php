<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
        $this->load->model('Jadwal_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Home";
        $data['data_kelas'] = $this->Kelas_model->getAllKelas();
        $data['data_jadwal'] = $this->Jadwal_model->getAllJadwal();

        $this->load->view('templates/user/header', $data);
        $this->load->view('user/home', $data);
        $this->load->view('templates/user/footer');
    }

    public function dataKelas()
    {
        $data['judul'] = "Halaman Data Kelas";
        $data['data_kelas'] = $this->Kelas_model->getAllKelas();

        $this->load->view('templates/user/header', $data);
        $this->load->view('user/data_kelas', $data);
        $this->load->view('templates/user/footer');
    }

    public function jadwalMatkul()
    {
        $data['data_jadwal'] = $this->Jadwal_model->getAllJadwal();

        $this->load->view('templates/user/header', $data);
        $this->load->view('user/jadwal_matkul', $data);
        $this->load->view('templates/user/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
