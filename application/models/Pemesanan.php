<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pemesanan extends CI_Model
{
    public function index()
    {
        $this->db->where('id_pemesanan', $this->session->userdata('id'));
        return $this->db->get('pemesanan')->row_array();
    }
}
