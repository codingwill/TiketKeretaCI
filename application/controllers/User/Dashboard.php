<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        //echo "User Role: " . $this->session->userdata('role_id');
        if ($this->session->userdata('role_id') != 2)
        {
            redirect('Admin/Dashboard');
        } 

        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['nik'] = $this->session->userdata('nik');
        $data['role'] = $this->session->userdata('role_id');
        // ini aku ganti templatenya tak pisah jadi 2 : utk admin dan utk user
        $this->load->view('User/templates/header');
        $this->load->view('User/templates/nav');
        $this->load->view('User/index', $data);
        $this->load->view('User/templates/footer');
    }
}
