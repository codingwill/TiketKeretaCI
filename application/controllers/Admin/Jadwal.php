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
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/templates/nav');
        $this->load->view('Admin/jadwal/tampil_jadwal', $data);
        $this->load->view('Admin/templates/footer');
    }

    /**
     * Tampil Form Tambah
     */
    public function create()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_ka', 'Nama Kereta Api', 'required', array('required' => 'Harus mengisi Nama Kereta Api'));
        $this->form_validation->set_rules('st_asal', 'Stasiun Asal', 'required', array('required' => 'Harus mengisi Stasiun Asal'));
        $this->form_validation->set_rules('st_tujuan', 'Stasiun Tujuan', 'required', array('required' => 'Harus mengisi Stasiun Tujuan'));
        $this->form_validation->set_rules('jamberangkat', 'Jam Berangkat', 'required', array('required' => 'Harus mengisi Jam Berangkat'));
        $this->form_validation->set_rules('jamdatang', 'Jumlah Datang', 'required', array('required' => 'Harus mengisi Jumlah Datang'));


        if ($this->form_validation->run() == FALSE) {
            $data['query'] = $this->modelJadwal->get_all3();
            // $this->load->view('kereta/myform', $data);
            // $this->load->view('account/tambahKereta', $data);
            $this->load->view('Admin/templates/header');
            $this->load->view('Admin/templates/nav');
            $this->load->view('Admin/jadwal/create_jadwal', $data);
            $this->load->view('Admin/templates/footer');
        } else {
            $data['nama_ka'] = $_POST['nama_ka'];
            $data['st_asal'] = $_POST['st_asal'];
            $data['st_tujuan'] = $_POST['st_tujuan'];
            $data['jamberangkat'] = $_POST['jamberangkat'];
            $data['jamdatang'] = $_POST['jamdatang'];
            $this->modelJadwal->insert_entry($data);
            $data['tampil'] = $this->modelJadwal->get_all3();
            $this->load->view('Admin/templates/header');
            $this->load->view('Admin/templates/nav');
            $this->load->view('Admin/jadwal/tampil_jadwal', $data);
            $this->load->view('Admin/templates/footer');
        }
    }
    public function tampilForm()
    {
        $data['tampil'] = $this->modelJadwal->get_all3();
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/templates/nav');
        $this->load->view('Admin/jadwal/tampil_jadwal', $data);
        $this->load->view('Admin/templates/footer');
    }
    public function hapus()
    {
        $this->load->helper(array('form', 'url'));
        $id = $_POST['id'];

        if ($this->input->post('hapus')) {
            $this->input->post('hapus');
            echo "data akan dihapus";
            $this->modelJadwal->hapus($id, 'jadwal');
            echo "Data deleted successfully !";
            redirect(base_url('Admin/Jadwal/tampilForm'));
        } else {
            echo "Error !";
            redirect(base_url('Admin/Jadwal/tampilForm'));
        }
    }

    /**
     * Tampil fForm Edit
     */
    public function edit()
    {
        $this->load->helper(array('form', 'url'));
        $id = $_POST['id'];
        //$hasil['query'] = $this->modelJadwal->get_all3();
        $hasil['data'] = $this->modelJadwal->displayEdit($id);
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/templates/nav');
        $this->load->view('Admin/jadwal/editjadwal', $hasil);
        $this->load->view('Admin/templates/footer');
        if ($this->input->post('edit')) {
            $id = $this->input->post('id');
            $nama_ka = $this->input->post('nama_ka');
            $st_asal = $this->input->post('st_asal');
            $st_tujuan = $this->input->post('st_tujuan');
            $jamberangkat = $this->input->post('jamberangkat');
            $jamdatang = $this->input->post('jamdatang');
            $this->modelJadwal->edit($nama_ka, $st_asal, $st_tujuan, $jamberangkat, $jamdatang, $id);


            redirect(base_url('Admin/Jadwal/tampilForm'));
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
        $hasil['data'] = $this->modelJadwal->detail($id);
        $this->load->view('Admin/templates/header');
        $this->load->view('Admin/templates/nav');
        $this->load->view('Admin/jadwal/detailjadwal', $hasil);
        $this->load->view('Admin/templates/footer');
    }
}
