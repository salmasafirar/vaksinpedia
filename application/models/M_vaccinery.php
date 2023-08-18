<?php

class M_vaccinery extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_data_vaccinery()
    {
        $this->db->select('*');
        $this->db->from('vaccinery');
        return $this->db->get();
    }
    public function vaccinery_perbulan()
    {
        $this->db->group_by("MONTHNAME(tanggal_vaksin)");
        $this->db->select("MONTHNAME(tanggal_vaksin) as Bulan");
        $this->db->select("count(*) as Jumlah");
        $this->db->from('vaccinery');
        $this->db->order_by('MONTH(tanggal_vaksin)');
        return $this->db->get()->result();
    }
    public function detail($id_vaccinery)
    {
        $this->db->select('*');
        $this->db->from('vaccinery');
        $this->db->where('id_vaccinery', $id_vaccinery);
        return $this->db->get();
    }

    public function get_kecamatan()
    {
        $this->db->select("*");
        $this->db->from('districts');
        $this->db->order_by('name');
        return $this->db->get()->result();
    }

    public function get_kelurahan($kecamatan)
    {
        //ambil data lokasi vaksin berdasarkan nama partners
        $this->db->where('district_id', $kecamatan);
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('villages');

        $output = '<option value="">Pilih Kelurahan</option>';

        //looping data
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->name . '">' . $row->name . '</option>';
        }
        //return data kabupaten
        return $output;
    }

    public function get_nama_kecamatan($kecamatan)
    {
        $this->db->select('name');
        $this->db->from('districts');
        $this->db->where('id', $kecamatan);
        return $this->db->get();
    }
    public function edit($id_vaccinery)
    {
        $this->db->select('*');
        $this->db->from('vaccinery');
        return $this->db->get()->row_array();
    }
    public function update($id_vaccinery, $data)
    {
        $this->db->where('id_vaccinery', $id_vaccinery);
        $this->db->update('vaccinery', $data);
    }
    public function hapus($id_vaccinery)
    {
        $this->db->where('id_vaccinery', $id_vaccinery);
        $this->db->delete('vaccinery');
    }
}
