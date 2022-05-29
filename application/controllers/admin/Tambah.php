<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah extends CI_Controller
{
    public function dekorasi()
    {
        $data['judul'] = 'Tambah Dekorasi';
        $data['header'] = 'Dekorasi';
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tambah_dekorasi', $data);
        $this->load->view('admin/footer');
    }
    public function tambah_dekorasi()
    {
        //tambah data
        $this->form_validation->set_rules('nama_dekorasi', 'Nama Dekorasi', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('pesan', 'Nama/Harga/Deskripsi/Foto Masih ada yang kosong!');
            redirect('admin/tambah/dekorasi');
        } else {
            $nama = htmlspecialchars($this->input->post('nama_dekorasi'));
            $harga = htmlspecialchars($this->input->post('harga'));
            $deskripsi = htmlspecialchars($this->input->post('deskripsi'));
            $foto = $_FILES['foto'];
            if ($foto = '') {
            } else {
                $config['upload_path'] = './upload';
                $config['allowed_types'] = 'jpg|png|jpeg|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo "ERROR";
                } else {
                    $foto = $this->upload->data('file_name');

                    $data = [
                        'nama_dekorasi' => $nama,
                        'deskripsi' => $deskripsi,
                        'harga_dekorasi' => $harga,
                        'foto' => $foto
                    ];
                    $this->session->set_flashdata('pesan', '<div class="pesan">Data anda berhasil ditambahkan!</div>');
                    $this->db->insert('dekorasi', $data);
                    redirect('admin/admin/dekorasi');
                }
            }
        }
    }
    public function hapus_dekorasi($id)
    {
        $this->db->delete('dekorasi', ['id_dekorasi' => $id]);
        redirect('admin/admin/dekorasi');
    }
    public function rias()
    {
        $data['judul'] = 'Tambah Rias';
        $data['header'] = 'Rias';
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tambah_rias', $data);
        $this->load->view('admin/footer');
    }
    public function tambah_rias()
    {
        $this->form_validation->set_rules('nama_rias', 'Nama Rias', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('pesan', 'Nama/Harga/Deskripsi/Foto Masih ada yang kosong!');
            redirect('admin/tambah/rias');
        } else {
            //tambah data
            $nama = htmlspecialchars($this->input->post('nama_rias'));
            $harga = htmlspecialchars($this->input->post('harga'));
            $deskripsi = htmlspecialchars($this->input->post('deskripsi'));
            $foto = $_FILES['foto'];
            if ($foto = '') {
            } else {
                $config['upload_path'] = './upload';
                $config['allowed_types'] = 'jpg|png|jpeg|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo "ERROR";
                } else {
                    $foto = $this->upload->data('file_name');

                    $data = [
                        'nama_rias' => $nama,
                        'deskripsi' => $deskripsi,
                        'harga_rias' => $harga,
                        'foto' => $foto
                    ];
                    $this->db->insert('rias', $data);
                    $this->session->set_flashdata('pesan', '<div class="pesan">Data anda berhasil ditambahkan!</div>');
                    redirect('admin/admin/rias');
                }
            }
        }
    }
    public function hapus_rias($id)
    {
        $this->db->delete('rias', ['id_rias' => $id]);
        redirect('admin/admin/rias');
    }
    public function dokumentasi()
    {
        $data['judul'] = 'Tambah Dokumentasi';
        $data['header'] = 'Dokumentasi';
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tambah_dokumentasi', $data);
        $this->load->view('admin/footer');
    }
    public function tambah_dokumentasi()
    {
        $this->form_validation->set_rules('nama_dokumentasi', 'Nama Dokumentasi', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('pesan', 'Nama/Harga/Deskripsi/Foto Masih ada yang kosong!');
            redirect('admin/tambah/dokumentasi');
        } else {
            //tambah data
            $nama = htmlspecialchars($this->input->post('nama_dokumentasi'));
            $harga = htmlspecialchars($this->input->post('harga'));
            $deskripsi = htmlspecialchars($this->input->post('deskripsi'));
            $foto = $_FILES['foto'];
            if ($foto = '') {
            } else {
                $config['upload_path'] = './upload';
                $config['allowed_types'] = 'jpg|png|jpeg|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo "ERROR";
                } else {
                    $foto = $this->upload->data('file_name');

                    $data = [
                        'nama_dokumentasi' => $nama,
                        'deskripsi' => $deskripsi,
                        'harga_dokumentasi' => $harga,
                        'foto' => $foto
                    ];
                    $this->db->insert('dokumentasi', $data);
                    $this->session->set_flashdata('pesan', '<div class="pesan">Data anda berhasil ditambahkan!</div>');
                    redirect('admin/admin/dokumentasi');
                }
            }
        }
    }
    public function hapus_dokumentasi($id)
    {
        $this->db->delete('dokumentasi', ['id_dokumentasi' => $id]);
        redirect('admin/admin/dokumentasi');
    }
    public function katering()
    {
        $data['judul'] = 'Tambah Katering';
        $data['header'] = 'Katering';
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tambah_katering', $data);
        $this->load->view('admin/footer');
    }
    public function tambah_katering()
    {
        $this->form_validation->set_rules('nama_katering', 'Nama Katering', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('pesan', 'Nama/Harga/Deskripsi/Foto Masih ada yang kosong!');
            redirect('admin/tambah/katering');
        } else {
            //tambah data
            $nama = htmlspecialchars($this->input->post('nama_katering'));
            $harga = htmlspecialchars($this->input->post('harga'));
            $jumlah = htmlspecialchars($this->input->post('jumlah'));
            $deskripsi = htmlspecialchars($this->input->post('deskripsi'));
            $foto = $_FILES['foto'];
            if ($foto = '') {
            } else {
                $config['upload_path'] = './upload';
                $config['allowed_types'] = 'jpg|png|jpeg|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo "ERROR";
                } else {
                    $foto = $this->upload->data('file_name');

                    $data = [
                        'nama_katering' => $nama,
                        'deskripsi' => $deskripsi,
                        'jumlah' => $jumlah,
                        'harga_katering' => $harga,
                        'foto' => $foto
                    ];
                    $this->db->insert('katering', $data);
                    $this->session->set_flashdata('pesan', '<div class="pesan">Data anda berhasil ditambahkan!</div>');
                    redirect('admin/admin/katering');
                }
            }
        }
    }
    public function hapus_katering($id)
    {
        $this->db->delete('katering', ['id_katering' => $id]);
        redirect('admin/admin/katering');
    }
    public function gedung()
    {
        $data['judul'] = 'Tambah Gedung';
        $data['header'] = 'Gedung';
        $data['link'] = $this->db->get('link_admin')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tambah_gedung', $data);
        $this->load->view('admin/footer');
    }
    public function tambah_gedung()
    {
        $this->form_validation->set_rules('nama_gedung', 'Nama Gedung', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('pesan', 'Nama/Harga/Deskripsi/Foto Masih ada yang kosong!');
            redirect('admin/tambah/gedung');
        } else {
            //tambah data
            $nama = htmlspecialchars($this->input->post('nama_gedung'));
            $harga = htmlspecialchars($this->input->post('harga'));
            $deskripsi = htmlspecialchars($this->input->post('deskripsi'));
            $foto = $_FILES['foto'];
            if ($foto = '') {
            } else {
                $config['upload_path'] = './upload';
                $config['allowed_types'] = 'jpg|png|jpeg|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo "ERROR";
                } else {
                    $foto = $this->upload->data('file_name');

                    $data = [
                        'nama_gedung' => $nama,
                        'deskripsi' => $deskripsi,
                        'harga_gedung' => $harga,
                        'foto' => $foto
                    ];
                    $this->db->insert('gedung', $data);
                    redirect('admin/admin/gedung');
                }
            }
        }
    }
    public function hapus_gedung($id)
    {
        $this->db->delete('gedung', ['id_gedung' => $id]);
        redirect('admin/admin/gedung');
    }


    public function hapus_pelanggan($id)
    {
        $this->db->delete('pelanggan', ['id' => $id]);
        redirect('admin/admin/pelanggan');
    }
    public function hapus_pemesanan($id)
    {
        $this->db->delete('pemesanan', ['id_pemesanan' => $id]);
        redirect('admin/admin/pemesanan');
    }
    public function hapus_pembayaran($id)
    {
        $this->db->delete('konfirmasi', ['id_konfirmasi' => $id]);
        redirect('admin/admin/pembayaran');
    }
}
