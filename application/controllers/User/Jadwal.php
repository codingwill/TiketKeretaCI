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
    }

    public function index()
    {
        $data['tampil'] = $this->modelJadwal->get_all3();
        
        //var_dump($data['tampil']);
        $this->load->view('User/templates/header');
        $this->load->view('User/templates/nav');
        $this->load->view('User/jadwal/tampil_jadwal', $data);
        $this->load->view('User/templates/footer');
    }

    public function tampilForm()
    {
        $data['tampil'] = $this->modelJadwal->get_all3();
        $this->load->view('User/templates/header');
        $this->load->view('User/templates/nav');
        $this->load->view('User/jadwal/tampil_jadwal', $data);
        $this->load->view('User/templates/footer');
    }
}
