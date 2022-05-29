<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Konfirmasi extends CI_Controller
{
    public function index()
    {
        $user = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('pelanggan', ['email' => $user])->row_array();
        $data['konfirmasi'] = $this->db->get_where('pemesanan', ['id_pelanggan' => $user])->row_array();
        $data['judul'] = 'Konfirmasi Pembayaran';
        $data['link'] = $this->db->get('link_dashboard')->result_array();
        if (empty($user)) {
            redirect('home');
        } else {
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/konfirmasi', $data);
            $this->load->view('dashboard/footer');
        }
    }
    public function confirm()
    {
        $user = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('pelanggan', ['email' => $user])->row_array();
        $id = $data['user']['id'];
        $data['pemesanan'] = $this->db->get_where('pemesanan', ['id_pelanggan' => $data['user']['id']])->row_array();
        $atas_nama = htmlspecialchars($this->input->post('nama'));
        $nore = htmlspecialchars($this->input->post('no_rek'));
        $bank = htmlspecialchars($this->input->post('bank'));
        $foto = $_FILES['foto'];

        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('pesan', 'Anda gagal Mengupload');
                redirect('konfirmasi');
            } else {
                $foto = $this->upload->data('file_name');
                $data = [
                    'id_pemesanan' => $data['pemesanan']['id_pemesanan'],
                    'id_pelanggan' => $data['user']['id'],
                    'no_rek' => $nore,
                    'bank' => $bank,
                    'atas_nama' => $atas_nama,
                    'foto' => $foto
                ];

                $this->db->insert('konfirmasi', $data);
                $this->session->set_flashdata('pesan', '<div class="pesan">Konfirmasi anda berhasil terkirim, mohon tunggu 1x24jam.</div>');
                redirect('detail/pemesanan/' . $id);
            }
        }
    }
}
