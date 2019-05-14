<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');
        // $this->load->model('Auth_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Home";

        $this->load->view('templates/user/header', $data);
        $this->load->view('user/home');
        $this->load->view('templates/user/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
