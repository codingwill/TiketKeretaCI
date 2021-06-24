<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'table'));
        $this->load->model(array('modelJadwal'));
        $this->load->database();
        if ($this->session->userdata('role_id') != 2)
        {
            redirect('Admin/Jadwal');
        } 
    }

    public function index()
    {
        $data['tampil'] = $this->modelJadwal->getAllJoinKA();
        //var_dump($data['tampil']);
        $this->load->view('User/templates/header');
        $this->load->view('User/templates/nav');
        $this->load->view('User/jadwal/tampil_jadwal', $data);
        $this->load->view('User/templates/footer');
    }

    public function tampilForm()
    {
        $data['tampil'] = $this->modelJadwal->getAllJoinKA();
        $this->load->view('User/templates/header');
        $this->load->view('User/templates/nav');
        $this->load->view('User/jadwal/tampil_jadwal', $data);
        $this->load->view('User/templates/footer');
    }

    
    public function detail()
    {
        $this->load->helper(array('form', 'url'));
        $id = $_POST['id'];
        $hasil['data'] = $this->modelJadwal->detail($id);
        $this->load->view('User/templates/header');
        $this->load->view('User/templates/nav');
        $this->load->view('User/jadwal/detailjadwal', $hasil);
        $this->load->view('User/templates/footer');
    }
}
