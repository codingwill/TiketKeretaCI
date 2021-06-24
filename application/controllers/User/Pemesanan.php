<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'table'));
        $this->load->model(array('modelTiket', 'modelDataKA', 'modelJadwal'));
        $this->load->database();
        if ($this->session->userdata('role_id') != 2)
        {
            redirect('Admin/Dashboard');
        } 
    }
    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nik', 'NIK', 'required', array('required' => 'Harus mengisi NIK'));
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', array('required' => 'Harus mengisi Nama Lengkap'));
        $this->form_validation->set_rules('email', 'Email', 'required', array('required' => 'Harus mengisi Email'));
        $this->form_validation->set_rules('alamat', 'Nama Lengkap', 'required', array('required' => 'Harus mengisi Alamat'));
        $this->form_validation->set_rules('tanggal', 'Tanggal Keberangkatan', 'required', array('required' => 'Harus mengisi Tanggal Keberangkatan'));
        $this->form_validation->set_rules('nama_ka', 'Nama KA', 'required', array('required' => 'Harus mengisi Nama KA'));
        if ($this->form_validation->run() == FALSE) {
            $data['query'] = $this->modelJadwal->getAllJoinKA();
            $data['nik'] = $this->session->userdata('nik');
            $data['email'] = $this->session->userdata('email');
            $data['nama'] = $this->session->userdata('nama');
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('User/pemesanan/create_pesan', $data);
            $this->load->view('templates/footer');
        } else {
            
            $data['nik'] = $_POST['nik'];
            $data['nama'] = $_POST['nama'];
            $data['email'] = $_POST['email'];
            $data['alamat'] = $_POST['alamat'];
            $data['tanggal'] = $_POST['tanggal'];
            $data['nama_ka'] = $this->modelJadwal->getNamaKA($_POST['nama_ka']);
            // $data['query'] = $this->modelDataKA->get_all3();
            $this->modelTiket->insert_entry($data);
            // $this->load->view('kereta/formsuccesstiket', $data);
            // $this->load->view('User/pemesanan/formsuccesstiket', $data);
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('User/pemesanan/tampil_pesan', $data);
            // echo $data['nik'];
            $this->load->view('templates/footer');
        }
    }

    /**
     * Tampil Form Tambah
     */
    // public function create()
    // {
    //     $this->load->view('templates/header');
    //     $this->load->view('templates/nav');
    //     $this->load->view('User/pemesanan/createpemesanan');
    //     $this->load->view('templates/footer');
    // }

    /**
     * Insert ke database
     */
    public function insert()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        //$this->form_validation->set_rules('nik', 'NIK', 'required', array('required' => 'Harus mengisi NIK'));
        //$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', array('required' => 'Harus mengisi Nama Lengkap'));
        //$this->form_validation->set_rules('email', 'Email', 'required', array('required' => 'Harus mengisi Email'));
        $this->form_validation->set_rules('alamat', 'Nama Lengkap', 'required', array('required' => 'Harus mengisi Alamat'));
        $this->form_validation->set_rules('tanggal', 'Tanggal Keberangkatan', 'required', array('required' => 'Harus mengisi Tanggal Keberangkatan'));
        $this->form_validation->set_rules('nama_ka', 'Nama KA', 'required', array('required' => 'Harus mengisi Nama KA'));
        if ($this->form_validation->run() == FALSE) {
            $data['query'] = $this->modelDataKA->get_all3();
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('User/pemesanan/create_pesan', $data);
            $this->load->view('templates/footer');
        } else {
            $data['nik'] = $_POST['nik'];
            $data['nama'] = $_POST['nama'];
            $data['email'] = $_POST['email'];
            $data['alamat'] = $_POST['alamat'];
            $data['tanggal'] = $_POST['tanggal'];
            $data['id_KA'] = $_POST['nama_ka'];
            
            $view['nik'] = $_POST['nik'];
            $view['nama'] = $_POST['nama'];
            $view['email'] = $_POST['email'];
            $view['alamat'] = $_POST['alamat'];
            $view['tanggal'] = $_POST['tanggal'];
            $view['id_KA'] = $_POST['nama_ka'];
            $view['tes'] = "WKWKWK";
            $result = $this->modelJadwal->getNamaKA($_POST['nama_ka']);
            $view['nama_jadwal'] = $result['nama_KA'] . " (" . $result['st_asal'] . " - " . $result["st_tujuan"] . ")";
            $this->modelTiket->insert_entry($data);
            $this->modelJadwal->ambilKursi($data['id_KA']);
            //===============
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('User/pemesanan/tampil_pesan', $view);
            $this->load->view('templates/footer');
        }
    }
    // public function cetak()
    // {
    //     $this->load->view('templates/header');
    //     $this->load->view('templates/nav');
    //     $this->load->view('User/pemesanan/formsuccesstiket');
    //     $this->load->view('templates/footer');
    // }
}
