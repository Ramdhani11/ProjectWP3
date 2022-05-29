<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function index()
    {
        function random($panjang = 4)
        {
            $karakter = '0123456789';
            $inta = '';

            for ($i = 0; $i < $panjang; $i++) {
                $rand = rand(0, strlen($karakter) - 1);
                $inta .= $karakter[$rand];
            }
            return $inta;
        }
        $email = $this->input->post('email');
        $user = $this->db->get_where('pelanggan', ['email' => $email])->row_array();
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $email,
            'password' => random(),
            'no_telpon' => $this->input->post('no_telp'),
            'role_id' => 1,
            'alamat' => $this->input->post('alamat'),
            'request' => $this->input->post('pertm')
        ];
        $this->db->insert('pelanggan', $data);
        $data = [
            'id' => $user['id'],
            'email' => $email,
            'role_id' => $user['role_id'],
            'nama' => $user['nama']
        ];
        $this->session->set_userdata($data);
        redirect('dashboard');
    }
    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('pelanggan', ['email' => $email])->row_array();
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data["link"] = $this->db->get('link')->result_array();
            $data["judul"] = "Login - Wise Wedding";
            $this->load->view('templates/header', $data);
            $this->load->view('nav/login');
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('pelanggan', ['email' => $email])->row_array();

        if ($user) {
            if ($password == $user['password']) {
                $data = [
                    'id' => $user['id'],
                    'email' => $email,
                    'role_id' => $user['role_id'],
                    'nama' => $user['nama']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 99) {
                    redirect('admin/admin/dashboard');
                } elseif ($user['role_id'] == 1) {
                    redirect('dashboard');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="flashdata">
                Password anda salah
            </div>');
                redirect('home/login');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="flashdata">
                Akun anda belum terdaftar
            </div>');
            redirect('home/login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('nama');
        redirect('home');
    }
}
