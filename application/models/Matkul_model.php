<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal_model');
    }

    public function getMatkulById($id)
    {
        return $this->db->get_where('t_matkul', ['id_matkul' => $id])->result();
    }

    public function getAllMatkul()
    {
        return $this->db->get('t_matkul')->result();
    }

    public function addMatkul()
    {
        $data = [
            'kode_matkul' => $this->input->post('kode_matkul'),
            'nama_matkul' => $this->input->post('nama_matkul'),
            'nama_dosen' => $this->input->post('nama_dosen'),
            'sks' => $this->input->post('sks')
        ];

        $this->db->insert('t_matkul', $data);
    }

    public function editMatkul($id)
    {
        $data = [
            'kode_matkul' => $this->input->post('kode_matkul'),
            'nama_matkul' => $this->input->post('nama_matkul'),
            'nama_dosen' => $this->input->post('nama_dosen'),
            'sks' => $this->input->post('sks')
        ];

        $this->db->update('t_matkul', $data, ['id_matkul' => $id]);

        $this->Jadwal_model->editAllEndTime($id);
    }

    public function deleteMatkul($id)
    {
        $this->db->delete('t_matkul', ['id_matkul' => $id]);
    }
}
