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
        $this->db->select('hari, nama_matkul, nama_dosen, sks, nama_ruangan, DATE_FORMAT(jam_masuk, "%r") as waktu_mulai, DATE_FORMAT(jam_keluar, "%r") as waktu_akhir');
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
}
