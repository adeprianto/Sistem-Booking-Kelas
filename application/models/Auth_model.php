<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function addMahasiswa()
	{
		$mhs = [
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'jurusan' => $this->input->post('jurusan'),
			'angkatan' => $this->input->post('angkatan'),
			'fakultas' => $this->input->post('fakultas'),
			'email' => $this->input->post('email')
		];

		$this->db->insert('t_mahasiswa', $mhs);

		$this->db->select('id');
		$this->db->order_by('id', 'DESC');
		$this->db->limit(1);
		$id_mhs = $this->db->get('t_mahasiswa')->result()[0]->id ;

		$this->addAkun($id_mhs);
	}

	public function addAkun($id)
	{
		$akun = [
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password1'),
			'id_mhs' => $id
		];

		$this->db->insert('t_akun_mhs', $akun);
	}
}
