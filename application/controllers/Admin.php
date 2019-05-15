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

    public function modelAddKelas()
    {
        $this->Kelas_model->addKelas();
        redirect('admin');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
