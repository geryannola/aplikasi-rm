<?php

class Kamar_model extends CI_Model
{
   public $table = 'kamar';
   public $id = 'kd_kamar';
   public $order = 'DESC';

   function __construct()
   {
      parent::__construct();
   }

   public function tampil_data()
   {
      $this->db->join('ruang_perawatan', 'ruang_perawatan.id_ruangan = kamar.kd_bangsal');
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

   public function tampil_status()
   {
      $result = array();
      $this->db->select('*');
      $this->db->from('status_kamar');
      return $this->db->get()->result_array();
   }
}
