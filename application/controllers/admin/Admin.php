<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function dashboard()
    {
        $data['pelanggan'] = $this->db->query("SELECT COUNT(id) AS total FROM pelanggan WHERE role_id = 1")->row_array();
        $data['transaksi'] = $this->db->query("SELECT COUNT(id_konfirmasi) AS total FROM konfirmasi")->row_array();
        $data['pemesanan'] = $this->db->query("SELECT COUNT(id_pemesanan) AS total FROM pemesanan")->row_array();
        $data['pesanan'] = $this->db->query('SELECT * FROM pemesanan JOIN pelanggan ON pelanggan.id=pemesanan.id_pelanggan')->result_array();
        $data['link'] = $this->db->get('link_admin')->result_array();
        $data['judul'] = 'Dashboard - Admin';
        $data['header'] = 'Dashboard';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/footer');
    }
    public function pelanggan()
    {
        $data['judul'] = 'Pelanggan - Wise Wedding';
        $data['header'] = 'Pelanggan';
        $data['link'] = $this->db->get('link_admin')->result_array();
        $data['pelanggan'] = $this->db->query('SELECT * FROM pelanggan WHERE role_id = 1')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/pelanggan', $data);
        $this->load->view('admin/footer');
    }
    public function pemesanan()
    {
        $data['pemesanan'] = $this->db->query('SELECT id_pemesanan,id_pelanggan,nama,tgl_booking,`status` FROM pemesanan JOIN pelanggan ON pelanggan.id=pemesanan.id_pelanggan ')->result_array();
        $data['judul'] = 'Pemesanan - Wise Wedding';
        $data['header'] = 'Pemesanan';
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/pemesanan', $data);
        $this->load->view('admin/footer');
    }
    public function pembayaran()
    {
        $data['konfirmasi'] = $this->db->query('SELECT id_konfirmasi,nama,no_rek,bank,atas_nama,foto FROM konfirmasi JOIN pelanggan ON pelanggan.id=konfirmasi.id_pelanggan ')->result_array();
        $data['judul'] = 'Pembayaran - Wise Wedding';
        $data['header'] = 'Pembayaran';
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/pembayaran', $data);
        $this->load->view('admin/footer');
    }
    public function gedung()
    {
        $data['gedung'] = $this->db->get('gedung')->result_array();
        $data['judul'] = 'Gedung';
        $data['header'] = 'Gedung';
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/gedung', $data);
        $this->load->view('admin/footer');
    }
    public function rias()
    {
        $data['rias'] = $this->db->get('rias')->result_array();
        $data['judul'] = 'Rias';
        $data['header'] = 'Rias';
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/rias', $data);
        $this->load->view('admin/footer');
    }
    public function dokumentasi()
    {
        $data['dokumentasi'] = $this->db->get('dokumentasi')->result_array();
        $data['judul'] = 'Dokumentasi';
        $data['header'] = 'Dokumentasi';
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/dokumentasi', $data);
        $this->load->view('admin/footer');
    }
    public function dekorasi()
    {
        $data['dekorasi'] = $this->db->get('dekorasi')->result_array();
        $data['judul'] = 'Dekorasi';
        $data['header'] = 'Dekorasi';
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/dekorasi', $data);
        $this->load->view('admin/footer');
    }
    public function katering()
    {
        $data['katering'] = $this->db->get('katering')->result_array();
        $data['judul'] = 'Katering';
        $data['header'] = 'Katering';
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/katering', $data);
        $this->load->view('admin/footer');
    }
}
