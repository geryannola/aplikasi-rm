<?php

class User_model extends CI_Model{
    
    public function tampil_data(){
        // return $this->db->limit(10);  
        return $this->db->get('user');
         
    }
}