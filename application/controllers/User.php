<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Kelas_model');
        $this->load->model('Jadwal_model');
        $this->load->model('Booking_model');
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
        $data['judul'] = "Halaman Jadwal Mata Kuliah";
        $data['data_jadwal'] = $this->Jadwal_model->getAllJadwal();

        $this->load->view('templates/user/header', $data);
        $this->load->view('user/jadwal_matkul', $data);
        $this->load->view('templates/user/footer');
    }

    public function jadwalKelas()
    {
        $data['judul'] = "Halaman Pengunaan Kelas";

        $this->load->view('templates/user/header', $data);
        $this->load->view('user/jadwal_kelas', $data);
        $this->load->view('templates/user/footer');
    }

    public function bookingKelas()
    {
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim');
        $this->form_validation->set_rules('waktu_mulai', 'waktu mulai', 'required|trim');
        $this->form_validation->set_rules('waktu_akhir', 'waktu akhir', 'required|trim');
        $this->form_validation->set_rules('berita', 'berita kegiatan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] = "Halaman Booking Kelas";
            $data['data_kelas'] = $this->Kelas_model->getAllKelas();

            $this->load->view('templates/user/header', $data);
            $this->load->view('user/booking_kelas', $data);
            $this->load->view('templates/user/footer');
        } else {

            $this->db->select('*');
            $this->db->from('t_booking_kelas');
            $this->db->where('tanggal = "' . $this->input->post('tanggal') . '" AND waktu_akhir > "' . $this->input->post('waktu_mulai') . '" AND waktu_mulai < "' . $this->input->post('waktu_akhir') . '" AND id_ruangan = ' . $this->input->post('ruangan'));

            if ($this->db->get()->num_rows() == 0) {
                $this->Booking_model->bookingKelas();
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><strong>Selamat!</strong> kelas sudah dibooking</div>');
                redirect('user/jadwalKelas');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"><strong>Maaf</strong>, kelas <strong>tidak tersedia</strong> untuk dibooking</div>');
                redirect('user/bookingKelas');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
