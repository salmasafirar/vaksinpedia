<?php

class M_user extends CI_Model{

    public function get_data_user()
    {
        $this->db->select('*');
        $this->db->from('user');
        return $this->db->get();
    }
}