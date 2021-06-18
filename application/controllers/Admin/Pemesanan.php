<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('User/pemesanan/create_pesan');
        $this->load->view('templates/footer');
    }

    /**
     * Tampil Form Tambah
     */
    public function create()
    {
    }

    /**
     * Insert ke database
     */
    public function insert()
    {
    }

    /**
     * Tampil fForm Edit
     */
    public function edit()
    {
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
}
