<?php

class M_dashboard_user extends CI_Model
{

    public function get_jadwal()
    {
        $this->db->select('*');
        $this->db->from('vaccinery');
        $this->db->where('User_id_user', $this->session->userdata('id_author'));
        $this->db->order_by('id_vaccinery');
        $this->db->limit(1, 0);
        return $this->db->get();
    }

    public function get_tanggal(){
        $this->db->select('DATE_FORMAT(tanggal_vaksin, "%d %M %Y") AS tanggal, DAYNAME(tanggal_vaksin) AS hari');
        $this->db->from('vaccinery');
        $this->db->where('User_id_user', $this->session->userdata('id_author'));
        $this->db->order_by('id_vaccinery');
        $this->db->limit(1, 0);
        return $this->db->get();
    }
}
