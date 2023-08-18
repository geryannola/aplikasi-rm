<?php

class Dokter_model extends CI_Model
{

    public $table = 'dokter';
    public $id = 'kd_dokter';
    public $order = 'DESC';

    public function tampil_data()
    {
        // return $this->db->limit(10);  
        return $this->db->get($this->table);
    }

    public function input_data($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function edit_data($id)
    {
        return $this->db->get_where($this->table, $id);
    }

    public function update_data($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }
    public function hapus_data($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
    public function tampil_dokter()
    {
        $result = array();
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get()->result_array();
    }
    public function tampil_jk()
    {
        $result = array();
        $this->db->select('*');
        $this->db->from('jk');
        return $this->db->get()->result_array();
    }

    public function tampil_gol_drh()
    {
        $result = array();
        $this->db->select('*');
        $this->db->from('gol_drh');
        return $this->db->get()->result_array();
    }
    public function tampil_agama()
    {
        $result = array();
        $this->db->select('*');
        $this->db->from('agama');
        return $this->db->get()->result_array();
    }
    public function tampil_stts_nikah()
    {
        $result = array();
        $this->db->select('*');
        $this->db->from('stts_nikah');
        return $this->db->get()->result_array();
    }
}
