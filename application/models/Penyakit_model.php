<?php

class Penyakit_model extends CI_Model
{

    public $table = 'penyakit';
    public $id = 'kd_penyakit';
    public $order = 'DESC';

    public function tampil_data()
    {
        // return $this->db->limit(10);  
        return $this->db->get($this->table);
    }
    public function tampil_penyakit()
    {
        $result = array();
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get()->result_array();
    }
}
