<?php
defined('BASEPATH') or exit('No direct script access allowed');
class modelTiket extends CI_Model
{

    public $nik;
    public $nama;
    public $alamat;
    public $email;
    public $tanggal;
    public $nama_ka;
    public function insert_entry($data)
    {
        $this->db->insert('pemesanan', $data);
    }
    public function get_all()
    {
        $query = $this->db->get('pemesanan');
        foreach ($query->result_array() as $row) {
            echo $row['nama'] . "-" . $row['nama_ka'] . "</br";
        }
    }
}
