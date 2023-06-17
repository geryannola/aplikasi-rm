<?php

class Lembar_model extends CI_Model
{

    public $table = 'lembar';
    public $id = 'id_lembar';
    public $order = 'DESC';


    public function tampil_data()
    {
        $this->db->join('ruang_perawatan', 'ruang_perawatan.id_ruangan = lembar.id_ruangan');
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
    public function tampil_lembar()
    {
        $result = array();
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get()->result_array();
    }

    public function tampil_lembar_ruangan()
    {
        $result = array();
        $this->db->select('*');
        $this->db->join('ruang_perawatan', 'ruang_perawatan.id_ruangan = lembar.id_ruangan');
        $this->db->from($this->table);
        return $this->db->get()->result_array();
    }
}
