<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Detail extends CI_Controller
{
    public function pemesanan($id)
    {
        $user = $this->session->userdata('email');
        $data['detail'] = $this->db->query("SELECT * FROM pemesanan LEFT JOIN pemesanan_rias ON pemesanan_rias.id_pemesanan= pemesanan.id_pemesanan LEFT JOIN pemesanan_katering ON pemesanan_katering.id_pemesanan = pemesanan.id_pemesanan LEFT JOIN pemesanan_gedung ON pemesanan_gedung.id_pemesanan= pemesanan.id_pemesanan LEFT JOIN pemesanan_dokumentasi ON pemesanan_dokumentasi.id_pemesanan=pemesanan.id_pemesanan LEFT JOIN pemesanan_dekorasi ON pemesanan_dokumentasi.id_pemesanan=pemesanan.id_pemesanan LEFT JOIN dekorasi ON dekorasi.id_dekorasi=pemesanan_dekorasi.id_dekorasi LEFT JOIN dokumentasi ON dokumentasi.id_dokumentasi=pemesanan_dokumentasi.id_dokumentasi LEFT JOIN rias ON rias.id_rias=pemesanan_rias.id_rias LEFT JOIN katering ON katering.id_katering=pemesanan_katering.id_katering LEFT JOIN gedung ON gedung.id_gedung=pemesanan_gedung.id_gedung JOIN pelanggan ON pelanggan.id=pemesanan.id_pelanggan WHERE pemesanan.id_pelanggan = $id")->row_array();
        $data['judul'] = 'Dashboard - Wise Wedding';
        $data['link'] = $this->db->get('link_dashboard')->result_array();
        if (empty($user)) {
            redirect('Home');
        } else {
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/detail', $data);
            $this->load->view('dashboard/footer');
        }
    }
    public function print()
    {
        $this->load->library('mypdf');
        $this->mypdf->generate('laporan_pdf');
    }
}
