<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
    public function getAllKelas()
    {
        $this->db->group_by('nama_ruangan', 'ASC');
        return $this->db->get('t_ruangan')->result();
    }

    public function getKelasById($id)
    {
        return $this->db->get_where('t_ruangan', ['id_ruangan' => $id])->result();
    }

    public function getKelasByName()
    {
        return $this->db->like('nama_ruangan', $this->input->post('keyword'), 'both')->get('t_ruangan')->result();
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
}
