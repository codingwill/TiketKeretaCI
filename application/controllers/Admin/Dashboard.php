<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('role_id') != 1)
        {
            redirect('User/Dashboard');
        } 

        
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');
        $data['nik'] = $this->session->userdata('nik');
        $data['role'] = $this->session->userdata('role_id');
        // ini ku ganti jadi Admin/template ..
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/templates/nav');
        $this->load->view('Admin/index', $data);
        $this->load->view('Admin/templates/footer');
    }
}
