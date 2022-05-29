<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit extends CI_Controller
{
    public function gedung($id)
    {
        $data['judul'] = 'Edit Gedung';
        $data['header'] = 'Gedung';
        $data['gedung'] = $this->db->get_where('gedung', ['id_gedung' => $id])->row_array();
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/edit_gedung', $data);
        $this->load->view('admin/footer');
    }
    public function edit_gedung($id)
    {
        $data['gedung'] = $this->db->get_where('gedung', ['id_gedung' => $id])->row_array();
        $data = [
            'nama_gedung' => $this->input->post('nama_gedung'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga_gedung' => $this->input->post('harga'),
            'foto' => $data['gedung']['foto']
        ];
        $this->db->update('gedung', $data, ['id_gedung' => $id]);
        $this->session->set_flashdata('pesan', '<div class="pesan edith">Data anda berhasil diedit!</div>');
        redirect('admin/admin/gedung');
    }
    public function editfoto_gedung($id)
    {
        $data['gedung'] = $this->db->get_where('gedung', ['id_gedung' => $id])->row_array();
        $nama = $data['gedung']['nama_gedung'];
        $deskripsi = $data['gedung']['deskripsi'];
        $harga = $data['gedung']['harga_gedung'];
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './upload';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo $this->upload->display_errors();
            } else {
                $foto_lama = $data['gedung']['foto'];
                unlink(FCPATH . 'upload/' . $foto_lama);
                $foto = $this->upload->data('file_name');
                $data = [
                    'nama_gedung' => $nama,
                    'deskripsi' => $deskripsi,
                    'harga_gedung' => $harga,
                    'foto' => $foto
                ];
                $this->db->update('gedung', $data, ['id_gedung' => $id]);
                redirect('admin/edit/gedung/' . $id);
            }
        }
        // $data = [
        //     'nama_gedung' => $this->input->post('nama_gedung'),
        //     'deskripsi' => $this->input->post('deskripsi'),
        //     'harga_gedung' => $this->input->post('harga'),
        //     'foto' => $data['gedung']['foto']
        // ];
        // $this->db->update('gedung', $data, ['id_gedung' => $id]);
        // redirect('admin/admin/gedung');
    }
    public function rias($id)
    {
        $data['judul'] = 'Edit Rias';
        $data['header'] = 'Rias';
        $data['rias'] = $this->db->get_where('rias', ['id_rias' => $id])->row_array();
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/edit_rias', $data);
        $this->load->view('admin/footer');
    }
    public function edit_rias($id)
    {
        $data['rias'] = $this->db->get_where('rias', ['id_rias' => $id])->row_array();
        $data = [
            'nama_rias' => $this->input->post('nama_rias'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga_rias' => $this->input->post('harga'),
            'foto' => $data['rias']['foto']
        ];
        $this->db->update('rias', $data, ['id_rias' => $id]);
        $this->session->set_flashdata('pesan', '<div class="pesan edith">Data anda berhasil diedit!</div>');
        redirect('admin/admin/rias');
    }
    public function editfoto_rias($id)
    {
        $data['rias'] = $this->db->get_where('rias', ['id_rias' => $id])->row_array();
        $nama = $data['rias']['nama_rias'];
        $deskripsi = $data['rias']['deskripsi'];
        $harga = $data['rias']['harga_rias'];
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './upload';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo $this->upload->display_errors();
            } else {
                $foto_lama = $data['rias']['foto'];
                unlink(FCPATH . 'upload/' . $foto_lama);
                $foto = $this->upload->data('file_name');
                $data = [
                    'nama_rias' => $nama,
                    'deskripsi' => $deskripsi,
                    'harga_rias' => $harga,
                    'foto' => $foto
                ];
                $this->db->update('rias', $data, ['id_rias' => $id]);
                redirect('admin/edit/rias/' . $id);
            }
        }
    }
    public function dekorasi($id)
    {
        $data['judul'] = 'Edit dekorasi';
        $data['header'] = 'Dekorasi';
        $data['dekorasi'] = $this->db->get_where('dekorasi', ['id_dekorasi' => $id])->row_array();
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/edit_dekorasi', $data);
        $this->load->view('admin/footer');
    }
    public function edit_dekorasi($id)
    {
        $data['dekorasi'] = $this->db->get_where('dekorasi', ['id_dekorasi' => $id])->row_array();
        $data = [
            'nama_dekorasi' => $this->input->post('nama_dekorasi'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga_dekorasi' => $this->input->post('harga'),
            'foto' => $data['dekorasi']['foto']
        ];
        $this->db->update('dekorasi', $data, ['id_dekorasi' => $id]);
        $this->session->set_flashdata('pesan', '<div class="pesan edith">Data anda berhasil diedit!</div>');
        redirect('admin/admin/dekorasi');
    }
    public function editfoto_dekorasi($id)
    {
        $data['dekorasi'] = $this->db->get_where('dekorasi', ['id_dekorasi' => $id])->row_array();
        $nama = $data['dekorasi']['nama_dekorasi'];
        $deskripsi = $data['dekorasi']['deskripsi'];
        $harga = $data['dekorasi']['harga_dekorasi'];
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './upload';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo $this->upload->display_errors();
            } else {
                $foto_lama = $data['dekorasi']['foto'];
                unlink(FCPATH . 'upload/' . $foto_lama);
                $foto = $this->upload->data('file_name');
                $data = [
                    'nama_dekorasi' => $nama,
                    'deskripsi' => $deskripsi,
                    'harga_dekorasi' => $harga,
                    'foto' => $foto
                ];
                $this->db->update('dekorasi', $data, ['id_dekorasi' => $id]);
                redirect('admin/edit/dekorasi/' . $id);
            }
        }
    }
    public function katering($id)
    {
        $data['judul'] = 'Edit Katering';
        $data['header'] = 'Katering';
        $data['katering'] = $this->db->get_where('katering', ['id_katering' => $id])->row_array();
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/edit_katering', $data);
        $this->load->view('admin/footer');
    }
    public function edit_katering($id)
    {
        $data['katering'] = $this->db->get_where('katering', ['id_katering' => $id])->row_array();
        $data = [
            'nama_katering' => $this->input->post('nama_katering'),
            'deskripsi' => $this->input->post('deskripsi'),
            'jumlah' => $this->input->post('jumlah'),
            'harga_katering' => $this->input->post('harga'),
            'foto' => $data['katering']['foto'],
        ];
        $this->db->update('katering', $data, ['id_katering' => $id]);
        $this->session->set_flashdata('pesan', '<div class="pesan edith">Data anda berhasil diedit!</div>');
        redirect('admin/admin/katering');
    }
    public function editfoto_katering($id)
    {
        $data['katering'] = $this->db->get_where('katering', ['id_katering' => $id])->row_array();
        $nama = $data['katering']['nama_katering'];
        $deskripsi = $data['katering']['deskripsi'];
        $jumlah = $data['katering']['jumlah'];
        $harga = $data['katering']['harga_katering'];
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './upload';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo $this->upload->display_errors();
            } else {
                $foto_lama = $data['katering']['foto'];
                unlink(FCPATH . 'upload/' . $foto_lama);
                $foto = $this->upload->data('file_name');
                $data = [
                    'nama_katering' => $nama,
                    'deskripsi' => $deskripsi,
                    'harga_katering' => $harga,
                    'foto' => $foto
                ];
                $this->db->update('katering', $data, ['id_katering' => $id]);
                redirect('admin/edit/katering/' . $id);
            }
        }
    }
    public function dokumentasi($id)
    {
        $data['judul'] = 'Edit Dokumentasi';
        $data['header'] = 'Dokumentasi';
        $data['dokumentasi'] = $this->db->get_where('dokumentasi', ['id_dokumentasi' => $id])->row_array();
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/edit_dokumentasi', $data);
        $this->load->view('admin/footer');
    }
    public function edit_dokumentasi($id)
    {
        $data['dokumentasi'] = $this->db->get_where('dokumentasi', ['id_dokumentasi' => $id])->row_array();
        $data = [
            'nama_dokumentasi' => $this->input->post('nama_dokumentasi'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga_dokumentasi' => $this->input->post('harga'),
            'foto' => $data['dokumentasi']['foto']
        ];
        $this->db->update('dokumentasi', $data, ['id_dokumentasi' => $id]);
        $this->session->set_flashdata('pesan', '<div class="pesan edith">Data anda berhasil diedit!</div>');
        redirect('admin/admin/dokumentasi');
    }
    public function editfoto_dokumentasi($id)
    {
        $data['dokumentasi'] = $this->db->get_where('dokumentasi', ['id_dokumentasi' => $id])->row_array();
        $nama = $data['dokumentasi']['nama_dokumentasi'];
        $deskripsi = $data['dokumentasi']['deskripsi'];
        $harga = $data['dokumentasi']['harga_dokumentasi'];
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './upload';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo $this->upload->display_errors();
            } else {
                $foto_lama = $data['dokumentasi']['foto'];
                unlink(FCPATH . 'upload/' . $foto_lama);
                $foto = $this->upload->data('file_name');
                $data = [
                    'nama_dokumentasi' => $nama,
                    'deskripsi' => $deskripsi,
                    'harga_dokumentasi' => $harga,
                    'foto' => $foto
                ];
                $this->db->update('dokumentasi', $data, ['id_dokumentasi' => $id]);
                redirect('admin/edit/dokumentasi/' . $id);
            }
        }
    }
    public function pemesanan($id)
    {
        $data['pemesanan'] = $this->db->query("SELECT * FROM pemesanan LEFT JOIN pemesanan_rias ON pemesanan_rias.id_pemesanan= pemesanan.id_pemesanan LEFT JOIN pemesanan_katering ON pemesanan_katering.id_pemesanan = pemesanan.id_pemesanan LEFT JOIN pemesanan_gedung ON pemesanan_gedung.id_pemesanan= pemesanan.id_pemesanan LEFT JOIN pemesanan_dokumentasi ON pemesanan_dokumentasi.id_pemesanan=pemesanan.id_pemesanan LEFT JOIN pemesanan_dekorasi ON pemesanan_dokumentasi.id_pemesanan=pemesanan.id_pemesanan LEFT JOIN dekorasi ON dekorasi.id_dekorasi=pemesanan_dekorasi.id_dekorasi LEFT JOIN dokumentasi ON dokumentasi.id_dokumentasi=pemesanan_dokumentasi.id_dokumentasi LEFT JOIN rias ON rias.id_rias=pemesanan_rias.id_rias LEFT JOIN katering ON katering.id_katering=pemesanan_katering.id_katering LEFT JOIN gedung ON gedung.id_gedung=pemesanan_gedung.id_gedung JOIN pelanggan ON pelanggan.id=pemesanan.id_pelanggan WHERE pemesanan.id_pelanggan = $id")->row_array();
        $data['konfirmasi'] = $this->db->get_where('konfirmasi', ['id_pelanggan' => $id])->row_array();
        $data['judul'] = 'Detail Pemesanan';
        $data['header'] = 'Pemesanan';
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/edit_pemesanan', $data);
        $this->load->view('admin/footer');
    }
    public function edit_pemesanan($id)
    {
        $data['pemesanan'] = $this->db->get_where('pemesanan', ['id_pemesanan' => $id])->row_array();
        $id_pelanggan = $data['pemesanan']['id_pelanggan'];
        $data = [
            'id_pemesanan' => $id,
            'id_pelanggan' => $data['pemesanan']['id_pelanggan'],
            'tgl_booking' => $data['pemesanan']['tgl_booking'],
            'status' => $this->input->post('status')
        ];
        $this->db->update('pemesanan', $data, ['id_pemesanan' => $id]);
        redirect('admin/edit/pemesanan/' . $id_pelanggan);
    }
    public function pembayaran($id)
    {
        $data['pembayaran'] = $this->db->get_where('konfirmasi', ['id_konfirmasi' => $id])->row_array();
        $data['judul'] = 'Detail Pembayaran';
        $data['header'] = 'Pembayaran';
        $data['link'] = $this->db->get('link_admin')->result_array();
        if ($data['pembayaran']) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/detail_pembayaran', $data);
            $this->load->view('admin/footer');
        } else {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/error_pembayaran');
            $this->load->view('admin/footer');
        }
    }
}
