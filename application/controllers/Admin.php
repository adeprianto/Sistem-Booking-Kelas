<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
        $this->load->model('Matkul_model');
        $this->load->model('Jadwal_model');
        $this->load->model('Booking_model');
    }

    public function index()
    {
        $data['judul'] = "Dashboard";
        $data['data_kelas'] = $this->Kelas_model->getAllKelas();
        $data['data_matkul'] = $this->Matkul_model->getAllMatkul();
        $data['data_jadwal'] = $this->Jadwal_model->getAllJadwal();
        $data['data_booking'] = $this->Booking_model->getAllTodayBookingKelas();

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
