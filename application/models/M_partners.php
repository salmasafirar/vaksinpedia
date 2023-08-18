<?php

class M_partners extends CI_Model
{
    public function get_data_partners()
    {
        $this->db->select('*');
        $this->db->from('partners');
        return $this->db->get();
    }

    public function detail($id_partners)
    {
        $this->db->select('*');
        $this->db->from('partners');
        $this->db->where('id_partners', $id_partners);
        return $this->db->get();
    }

    public function get_faskes($faskes)
    {
        $this->db->select('nama_mitra');
        $this->db->from('partners');
        $this->db->where('id_partners', $faskes);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->nama_mitra;
        }
        return false;
    }

    public function hapus($id_partners)
    {
        $this->db->where('id_partners', $id_partners);
        $this->db->delete('Partners');
    }


    public function update($id_partners, $data)
    {
        $this->db->where('id_partners', $id_partners);
        $this->db->update('partners', $data);
    }

    public function get_partners($mitra)
    {
        $this->db->select('id_hospitiva');
        $this->db->from('hospitiva');
        $this->db->where('nama_mitra', $mitra);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->id_hospitiva;
        }
        return false;
    }
}
