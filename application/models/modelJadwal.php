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

    public function getAllJoinKA()
    {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('data_ka', 'data_ka.id_KA = jadwal.id_KA');
        $query = $this->db->get();
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
        $query = $this->db->query("update jadwal SET id_KA='$nama_ka', st_asal='$st_asal', st_tujuan='$st_tujuan', jamberangkat='$jamberangkat',
        jamdatang='$jamdatang' where id_jadwal='$id'");
        return $query;
    }
    function detail($id)
    {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->where('id_jadwal', $id);
        $this->db->join('data_ka', 'data_ka.id_KA = jadwal.id_KA');
        $this->db->join('kelaska', 'kelaska.idkelas = data_KA.kelas');
        
        //$this->db->join('st_asalka', 'jadwal.st_asal=st_asalka.idst_asal');
        $query = $this->db->get();
        return $query->result();
    }

    function ambilKursi($id)
    {
        $query = "UPDATE jadwal
        SET sisa_kursi = sisa_kursi - 1
        WHERE id_jadwal = $id;";
        //echo $query;
        $this->db->query($query);
    }

    function getNamaKA($id)
    {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('data_ka', 'data_ka.id_KA = jadwal.id_KA');
        $this->db->where('id_jadwal', $id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0];
    }
}
