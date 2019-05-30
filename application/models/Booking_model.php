<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking_model extends CI_Model
{

    public function getAllTodayBookingKelas()
    {
        return $this->db->query('SELECT t_ruangan.id_ruangan, nama_ruangan, kapasitas, id_booking, id_mahasiswa, berita_kegiatan, tanggal, waktu_mulai, waktu_akhir FROM t_ruangan LEFT JOIN t_booking_kelas ON t_ruangan.id_ruangan = t_booking_kelas.id_ruangan AND tanggal = CURDATE()')->result();
    }

    public function getBookingKelasByUser($id)
    {
        $this->db->select('nama, nim, fakultas, jurusan, angkatan, tanggal, berita_kegiatan, TIME_FORMAT(waktu_mulai, "%H:%i") as waktu_mulai, TIME_FORMAT(waktu_akhir, "%H:%i") as waktu_akhir');
        $this->db->from('t_booking_kelas, t_mahasiswa');
        $this->db->where('t_booking_kelas.id_mahasiswa = t_mahasiswa.id AND id_ruangan = ' . $id . ' AND tanggal >= CURDATE()');
        return $this->db->get()->result();
    }

    public function bookingKelas()
    {
        $data = [
            'id_mahasiswa' => $this->session->userdata('id'),
            'id_ruangan' => $this->input->post('ruangan'),
            'tanggal' => $this->input->post('tanggal'),
            'waktu_mulai' => $this->input->post('waktu_mulai'),
            'waktu_akhir' => $this->input->post('waktu_akhir'),
            'berita_kegiatan' => $this->input->post('berita')
        ];

        $this->db->insert('t_booking_kelas', $data);
    }
}
