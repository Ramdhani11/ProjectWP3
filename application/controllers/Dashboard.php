<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $user = $this->session->userdata('email');
        $id_user = $this->session->userdata('id');
        $data['user'] = $this->db->get_where('pelanggan', ['email' => $user])->row_array();
        $data['judul'] = 'Dashboard - Wise Wedding';
        $data['rias'] = $this->db->get('rias')->result_array();
        $data['dekorasi'] = $this->db->get('dekorasi')->result_array();
        $data['katering'] = $this->db->get('katering')->result_array();
        $data['dokumentasi'] = $this->db->get('dokumentasi')->result_array();
        $data['gedung'] = $this->db->get('gedung')->result_array();
        $data['pemesanan'] = $this->db->get_where('pemesanan', ['id_pelanggan' => $data['user']['id']])->row_array();
        $data['link'] = $this->db->get('link_dashboard')->result_array();


        if (empty($data['user'])) {
            redirect('Home');
        } else {
            $this->form_validation->set_rules('rias', 'Rias', 'required', [
                'required' => "Anda Belum Memilih <b>Rias</b>"
            ]);
            $this->form_validation->set_rules('dokumentasi', 'Dokumentasi', 'required', [
                'required' => "Anda Belum Memilih <b>Dokumentasi</b>"
            ]);
            $this->form_validation->set_rules('dekorasi', 'Dekorasi', 'required', [
                'required' => "Anda Belum Memilih <b>Dekorasi</b>"
            ]);
            $this->form_validation->set_rules('gedung', 'Gedung', 'required', [
                'required' => "Anda Belum Memilih <b>Gedung</b>"
            ]);
            $this->form_validation->set_rules('katering', 'Katering', 'required', [
                'required' => "Anda Belum Memilih <b>Katering</b>"
            ]);

            if ($this->form_validation->run() == false) {
                $this->load->view('dashboard/header', $data);
                $this->load->view('dashboard/dashboard', $data);
                $this->load->view('dashboard/footer');
            } else {
                $this->_check();
            }
        }
    }
    private function _check()
    {
        $rias = $this->input->post('rias');
        $dokumentasi = $this->input->post('dokumentasi');
        $dekorasi = $this->input->post('dekorasi');
        $katering = $this->input->post('katering');
        $gedung = $this->input->post('gedung');
        $date = $this->input->post('tanggal');

        $user = $this->db->get_where('pelanggan', ['email' => $this->session->userdata('email')])->row_array();
        $pemesanan = [
            'id_pemesanan' => $date,
            'id_pelanggan' => $user['id'],
            'tgl_booking' => $date,
            'status' => 'pending'
        ];
        $this->db->insert('pemesanan', $pemesanan);

        $ris = [
            'id_pemesanan' => $date,
            'id_rias' => $rias
        ];
        $this->db->insert('pemesanan_rias', $ris);
        $dok = [
            'id_pemesanan' => $date,
            'id_dokumentasi' => $dokumentasi
        ];
        $this->db->insert('pemesanan_dokumentasi', $dok);
        $ged = [
            'id_pemesanan' => $date,
            'id_gedung' => $gedung
        ];
        $this->db->insert('pemesanan_gedung', $ged);
        $kate = [
            'id_pemesanan' => $date,
            'id_katering' => $katering
        ];
        $this->db->insert('pemesanan_katering', $kate);
        $dek = [
            'id_pemesanan' => $date,
            'id_dekorasi' => $dekorasi
        ];
        $this->db->insert('pemesanan_dekorasi', $dek);
        redirect('detail/pemesanan/' . $user['id']);
    }
}
