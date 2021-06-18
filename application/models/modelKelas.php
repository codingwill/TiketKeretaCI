<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelKelas extends CI_Model
{

    public $idkelas;
    public $namakelas;


    public function get_all()
    {
        $query = $this->db->get('kelaska');
        return $query;
    }
    public function insert_entry($data)
    {
        $this->db->insert('kelaska', $data);
    }
}
