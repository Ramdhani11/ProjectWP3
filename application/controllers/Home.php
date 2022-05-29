<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function index()
    {
        $data["link"] = $this->db->get('link')->result_array();
        $data["judul"] = "Wise Wedding - Wedding Organizer";
        $this->load->view('templates/header', $data);
        $this->load->view('Home');
        $this->load->view('templates/footer');
    }
    public function porto()
    {
        $data["link"] = $this->db->get('link')->result_array();
        $data["judul"] = "Portofolio - Wise Wedding";
        $this->load->view('templates/header', $data);
        $this->load->view('nav/porto');
        $this->load->view('templates/footer');
    }
    public function acak()
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
        echo random();
    }
    public function pelayanan()
    {
        $data["link"] = $this->db->get('link')->result_array();
        $data["judul"] = "Pelayanan - Wise Wedding";
        $this->load->view('templates/header', $data);
        $this->load->view('nav/pelayanan');
        $this->load->view('templates/footer');
    }
    public function kontak()
    {
        $data["link"] = $this->db->get('link')->result_array();
        $data["judul"] = "Kontak - Wise Wedding";
        $this->load->view('templates/header', $data);
        $this->load->view('nav/kontak');
        $this->load->view('templates/footer');
    }
    public function login()
    {
        $data["link"] = $this->db->get('link')->result_array();
        $data["judul"] = "Login - Wise Wedding";
        $this->load->view('templates/header', $data);
        $this->load->view('nav/login');
        $this->load->view('templates/footer');
    }
    public function teeet()
    {
        $data['user'] = $this->db->get_where('pelanggan', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('index', $data);
    }
}
