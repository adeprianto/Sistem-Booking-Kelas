<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking_model extends CI_Model
{

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
