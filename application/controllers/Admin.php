<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Kelas_model');
        $this->load->model('Matkul_model');
        $this->load->model('Jadwal_model');
    }

    public function index()
    {
        $data['judul'] = "Dashboard";
        $data['data_kelas'] = $this->Kelas_model->getAllKelas();
        $data['data_matkul'] = $this->Matkul_model->getAllMatkul();
        $data['data_jadwal'] = $this->Jadwal_model->getAllJadwal();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/admin/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
