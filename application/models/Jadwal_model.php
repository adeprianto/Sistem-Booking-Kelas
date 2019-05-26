<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Matkul_model');
    }

    public function getAllJadwal()
    {
        $this->db->select('id_jadwal, hari, nama_matkul, nama_dosen, sks, nama_ruangan, TIME_FORMAT(jam_masuk, "%H:%i") as jam_masuk, DATE_FORMAT(jam_masuk, "%r") as waktu_mulai, DATE_FORMAT(jam_keluar, "%r") as waktu_akhir');
        $this->db->from('t_jadwal_matkul jadwal');
        $this->db->join('t_matkul matkul', 'jadwal.id_matkul = matkul.id_matkul', 'inner');
        $this->db->join('t_ruangan kelas', 'jadwal.id_ruangan = kelas.id_ruangan', 'inner');
        return $this->db->get()->result();
    }

    public function addJadwal()
    {
        $sks = $this->Matkul_model->getMatkulById($this->input->post('matkul'))[0]->sks;

        $start = strtotime($this->input->post('waktu_mulai'));
        $end = date("H:i a", strtotime('+' . $sks * 50 . ' Minutes', $start));

        $data = [
            'id_matkul' => $this->input->post('matkul'),
            'id_ruangan' => $this->input->post('ruangan'),
            'hari' => $this->input->post('hari'),
            'jam_masuk' => $this->input->post('waktu_mulai'),
            'jam_keluar' => $end
        ];

        $this->db->insert('t_jadwal_matkul', $data);
    }

    public function editJadwal($id)
    {
        $sks = $this->Matkul_model->getMatkulById($this->input->post('matkul'))[0]->sks;

        $start = strtotime($this->input->post('waktu_mulai'));
        $end = date("H:i a", strtotime('+' . $sks * 50 . ' Minutes', $start));

        $data = [
            'id_matkul' => $this->input->post('matkul'),
            'id_ruangan' => $this->input->post('ruangan'),
            'hari' => $this->input->post('hari'),
            'jam_masuk' => $this->input->post('waktu_mulai'),
            'jam_keluar' => $end
        ];

        $this->db->update('t_jadwal_matkul', $data, ['id_jadwal' => $id]);
    }

    public function editAllEndTime($id)
    {
        $data = $this->db->get_where('t_jadwal_matkul', ['id_matkul' => $id])->result();

        $sks = $this->Matkul_model->getMatkulById($data[0]->id_matkul)[0]->sks;

        foreach ($data as $jadwal) {
            $start = strtotime($jadwal->jam_masuk);
            $end = date("H:i a", strtotime('+' . $sks * 50 . ' Minutes', $start));
            $this->db->set('jam_keluar', $end);
            $this->db->where('id_jadwal', $jadwal->id_jadwal);
            $this->db->update('t_jadwal_matkul');
        }
    }

    public function deleteJadwal($id)
    {
        $this->db->delete('t_jadwal_matkul', ['id_jadwal' => $id]);
    }
}
