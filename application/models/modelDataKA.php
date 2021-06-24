<?php
defined('BASEPATH') or exit('No direct script access allowed');
class modelDataKA extends CI_Model
{

    public $nama_KA;
    public $kelas;
    public $status;
    public $jumlahkursi;
    public $keterangan;
    public function insert_entry($data)
    {
        $this->db->insert('data_ka', $data);
    }

    public function get_all()
    {
        $query = $this->db->get('data_ka');
        foreach ($query->result_array() as $row) {
            echo $row['nama_KA'] . "-" . $row['$kelas'] . "</br";
        }
    }
    public function get_all2()
    {
        $this->db->select('*');
        $this->db->from('data_ka');
        $this->db->join('kelaska', 'data_ka.kelas=kelaska.idkelas');
        $query = $this->db->get();
        return $query;
    }
    public function get_all3()
    {
        $query = $this->db->get('data_ka');
        return $query;
        // $this->db->select('nama_KA');
        // $this->db->from('data_ka');
        // $query = $this->db->get();
        // return $query;
    }

    function getAllWithKelas()
    {
        $this->db->select('*');
        $this->db->from('data_ka');
        $this->db->join('kelaska', 'kelaska.idkelas = data_ka.kelas');
        
        //$this->db->join('st_asalka', 'jadwal.st_asal=st_asalka.idst_asal');
        $query = $this->db->get();
        return $query;
    }

    public function getKursiByName($id)
    {
        $this->db->select('jumlahkursi');
        $this->db->from('data_ka');
        $this->db->where('id_KA = ' . $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function KA_aktif()
    {
        $this->db->select('*');
        $this->db->from('data_ka');
        $this->db->where('status', 'aktif ');
        $query = $this->db->get();
        return $query;
    }
    public function tampil_data()
    {
        return $this->db->get('data_ka');
    }
    public function hapus($id_KA, $table)
    {
        $this->db->where('id_KA', $id_KA);
        $this->db->delete($table);
        return true;
    }

    function displayEdit($id)
    {
        $query = $this->db->query("select * from data_KA where id_KA='$id'");
        return $query->result();
    }

    /*Update*/
    function edit($nama_KA, $kelas, $status, $jumlahkursi, $keterangan, $id)
    {
        $query = $this->db->query("update data_KA SET nama_KA='$nama_KA', kelas='$kelas', status='$status', jumlahkursi='$jumlahkursi',
        keterangan='$keterangan' where id_KA='$id'");
        return $query;
    }
    function detail($id)
    {
        $this->db->select('*');
        $this->db->from('data_ka');
        $this->db->where('id_KA', $id);
        $this->db->join('kelaska', 'data_ka.kelas=kelaska.idkelas');
        $query = $this->db->get();
        return $query->result();
    }
}
