<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Login Page";

		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');
	}

	public function registration()
	{
		$data['judul'] = "Registration Page";
		
		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/register');
		$this->load->view('templates/auth_footer');
	}
}
