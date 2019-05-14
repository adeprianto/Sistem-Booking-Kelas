<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');
        // $this->load->model('Auth_model');
    }

    public function index()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/dashboard');
        $this->load->view('templates/admin/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
