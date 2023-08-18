<?php

class M_pencarian extends CI_Model
{
    public function get_data_lokasi($keyword)
    {
        $this->db->select('*');
        $this->db->from('schedule');
        $this->db->like('lokasi', $keyword);
        return $this->db->get();
    }
}
