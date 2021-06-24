<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_ka extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'table'));
        $this->load->model(array('modelTiket', 'modelDataKA', 'modelKelas'));
        $this->load->database();
        
        if ($this->session->userdata('role_id') != 1)
        {
            redirect('User/Data_ka');
        } 
    }

    public function index()
    {
        
        $data['tampil'] = $this->modelDataKA->get_all2();
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/templates/nav');
        $this->load->view('Admin/data_ka/tampildata_ka', $data);
        $this->load->view('Admin/templates/footer');
    }

    /**
     * Tampil Form Tambah
     */
    public function create()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('namaKA', 'Nama KA', 'required', array('required' => 'Harus mengisi Nama Kereta'));
        $this->form_validation->set_rules('kelas', 'Kelas KA', 'required', array('required' => 'Harus mengisi Kelas Kereta'));
        $this->form_validation->set_rules('status', 'Status KA', 'required', array('required' => 'Harus mengisi Status Kereta'));
        $this->form_validation->set_rules('jumlahkursi', 'Jumlah Kursi', 'required', array('required' => 'Harus mengisi Jumlah Kursi'));


        if ($this->form_validation->run() == FALSE) {
            $data['query'] = $this->modelKelas->get_all();
            // $this->load->view('kereta/myform', $data);
            // $this->load->view('account/tambahKereta', $data);
            $this->load->view('Admin/templates/header');
            $this->load->view('Admin/templates/nav');
            $this->load->view('Admin/data_ka/createdata_ka', $data);
            $this->load->view('Admin/templates/footer');
        } else {
            $data['nama_KA'] = $_POST['namaKA'];
            $data['kelas'] = $_POST['kelas'];
            $data['status'] = $_POST['status'];
            $data['jumlahkursi'] = $_POST['jumlahkursi'];
            $data['keterangan'] = $_POST['keterangan'];
            $this->modelDataKA->insert_entry($data);
            $data['tampil'] = $this->modelDataKA->get_all2();
            $this->load->view('Admin/templates/header');
            $this->load->view('Admin/templates/nav');
            $this->load->view('Admin/data_ka/tampildata_ka', $data);
            $this->load->view('Admin/templates/footer');
        }
    }
    public function tampilForm()
    {
        $data['tampil'] = $this->modelDataKA->get_all2();
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/templates/nav');
        $this->load->view('Admin/data_ka/tampildata_ka', $data);
        $this->load->view('Admin/templates/footer');
    }
    public function hapus()
    {
        $this->load->helper(array('form', 'url'));
        $id = $_POST['id'];

        if ($this->input->post('hapus')) {
            $this->input->post('hapus');
            echo "data akan dihapus";
            $this->modelDataKA->hapus($id, 'data_KA');
            echo "Data deleted successfully !";
            redirect(base_url('Admin/Data_ka/tampilForm'));
        } else {
            echo "Error !";
            redirect(base_url('Admin/Data_ka/tampilForm'));
        }
    }

    /**
     * Tampil fForm Edit
     */
    public function edit()
    {
        $this->load->helper(array('form', 'url'));
        $id = $_POST['id'];
        $hasil['query'] = $this->modelKelas->get_all();
        $hasil['data'] = $this->modelDataKA->displayEdit($id);
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/templates/nav');
        $this->load->view('Admin/data_ka/editdata_ka', $hasil);
        $this->load->view('Admin/templates/footer');
        if ($this->input->post('edit')) {
            $id = $this->input->post('id');
            $nama_KA = $this->input->post('nama_KA');
            $kelas = $this->input->post('kelas');
            $status = $this->input->post('status');
            $jumlahkursi = $this->input->post('jumlahkursi');
            $keterangan = $this->input->post('keterangan');
            $this->modelDataKA->edit($nama_KA, $kelas, $status, $jumlahkursi, $keterangan, $id);


            redirect(base_url('Admin/Data_ka/tampilForm'));
            echo "success" . $id;
        }
    }

    /**
     * Update data
     */
    public function update()
    {
    }

    /**
     * Delete data
     */
    public function delete()
    {
    }

    public function detail()
    {
        $this->load->helper(array('form', 'url'));
        $id = $_POST['id'];
        $hasil['data'] = $this->modelDataKA->detail($id);
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/templates/nav');
        $this->load->view('Admin/data_ka/detaildata_ka', $hasil);
        $this->load->view('Admin/templates/footer');
    }
}
