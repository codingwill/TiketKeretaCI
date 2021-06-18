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
        // ini aku ganti templatenya tak pisah jadi 2 : utk admin dan utk user
        $this->load->view('User/templates/header');
        $this->load->view('User/templates/nav');
        $this->load->view('User/index');
        $this->load->view('User/templates/footer');
    }
}
