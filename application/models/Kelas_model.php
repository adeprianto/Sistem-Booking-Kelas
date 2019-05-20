<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
    public function getAllKelas()
    {
        return $this->db->get('t_ruangan')->result();
    }

    public function getAllMatkul()
    {
        return $this->db->get('t_matkul')->result();
    }


    public function getPartKelas()
    {
        return $this->db->get('t_ruangan', 5)->result();
    }

    public function addKelas()
    {
        $data = [
            'nama_ruangan' => $this->input->post('nama_kelas'),
            'kapasitas' => $this->input->post('kapasitas')
        ];

        $this->db->insert('t_ruangan', $data);
    }

    public function editKelas($id)
    {
        $data = [
            'nama_ruangan' => $this->input->post('nama_kelas'),
            'kapasitas' => $this->input->post('kapasitas')
        ];

        $this->db->update('t_ruangan', $data, ['id_ruangan' => $id]);
    }

    public function deleteKelas($id)
    {
        $this->db->delete('t_ruangan', ['id_ruangan' => $id]);
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
    }

    public function deleteMatkul($id)
    {
        $this->db->delete('t_matkul', ['id_matkul' => $id]);
    }
}
