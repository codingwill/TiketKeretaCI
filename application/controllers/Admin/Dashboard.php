<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata('email')]
        )->row_array();
        // ini ku ganti jadi Admin/template ..
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/templates/nav');
        $this->load->view('Admin/index');
        $this->load->view('Admin/templates/footer');
    }
}
