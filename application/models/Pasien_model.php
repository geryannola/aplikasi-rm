<?php

class Pasien_model extends CI_Model
{

    public $table = 'pasien';
    public $id = 'id_pasien';
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
}
