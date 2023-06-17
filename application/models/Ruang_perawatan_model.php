<?php

class Ruang_perawatan_model extends CI_Model
{


   public $table = 'ruang_perawatan';
   public $id = 'id_ruangan';
   public $order = 'DESC';

   public function tampil_data()
   {

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
   public function tampil_perawatan()
   {
      $result = array();
      $this->db->select('*');
      $this->db->from('ruang_perawatan');
      return $this->db->get()->result_array();
   }
}
