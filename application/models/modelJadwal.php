<?php
defined('BASEPATH') or exit('No direct script access allowed');
class modelJadwal extends CI_Model
{
    public $nama_ka;
    public $st_asal;
    public $st_tujuan;
    public $jamberangkat;
    public $jamdatang;

    public function insert_entry($data)
    {
        $this->db->insert('jadwal', $data);
    }

    public function get_all()
    {
        $query = $this->db->get('jadwal');
        foreach ($query->result_array() as $row) {
            echo $row['nama_ka'] . "-" . $row['$st_asal'] . "</br";
        }
    }

    public function get_all3()
    {
        $query = $this->db->get('jadwal');
        return $query;
        // $this->db->select('nama_ka');
        // $this->db->from('jadwal');
        // $query = $this->db->get();
        // return $query;
    }

    public function tampil_data()
    {
        return $this->db->get('jadwal');
    }
    public function hapus($id_jadwal, $table)
    {
        $this->db->where('id_jadwal', $id_jadwal);
        $this->db->delete('jadwal');
        return true;
    }

    function displayEdit($id)
    {
        $query = $this->db->query("select * from jadwal where id_jadwal='$id'");
        return $query->result();
    }

    /*Update*/
    function edit($nama_ka, $st_asal, $st_tujuan, $jamberangkat, $jamdatang, $id)
    {
        $query = $this->db->query("update jadwal SET nama_ka='$nama_ka', st_asal='$st_asal', st_tujuan='$st_tujuan', jamberangkat='$jamberangkat',
        jamdatang='$jamdatang' where id_jadwal='$id'");
        return $query;
    }
    function detail($id)
    {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->where('id_jadwal', $id);
        //$this->db->join('st_asalka', 'jadwal.st_asal=st_asalka.idst_asal');
        $query = $this->db->get();
        return $query->result();
    }
}
