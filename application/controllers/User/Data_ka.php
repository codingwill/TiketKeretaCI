<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_ka extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model(array('modelDataKA'));
        $this->load->database();
        if ($this->session->userdata('role_id') != 2)
        {
            redirect('User/Data_ka');
        } 
    }

    public function index()
    {
        //will
        $data['dataKereta'] = $this->modelDataKA->getAllWithKelas();
        //var_dump($data['dataKereta']);
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('User/data_ka/tampildata_ka', $data);
        $this->load->view('templates/footer');
    }

    /**
     * Tampil Form Tambah
     */
    /*
    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('User/data_ka/createdata_ka');
        $this->load->view('templates/footer');
    }
    */
    /**
     * Insert ke database
     */
    public function insert()
    {
    }
}
