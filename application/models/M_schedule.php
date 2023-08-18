<?php

class M_schedule extends CI_Model
{
    public function get_data_schedule()
    {
        $this->db->select('* , partners.nomor_telepon AS nomor_telepon, partners.alamat AS alamat');
        $this->db->from('schedule');
        $this->db->join('partners', 'partners.id_partners = schedule.Partners_id_partners');
        return $this->db->get();
    }

    public function get_data_schedule_top5()
    {
        $this->db->select('*');
        $this->db->from('schedule');
        $this->db->join('partners', 'partners.id_partners = schedule.Partners_id_partners');
        $this->db->limit(5, 0);
        return $this->db->get();
    }

    public function detail($id_schedule)
    {
        $this->db->select('* , partners.nomor_telepon AS nomor_telepon, partners.alamat AS alamat');
        $this->db->from('schedule');
        $this->db->join('partners', 'partners.id_partners = schedule.Partners_id_partners');
        $this->db->where('schedule.id_schedule', $id_schedule);
        return $this->db->get();
    }

    public function get_schedule($lokasi, $tanggal)
    {
        $this->db->select('id_schedule');
        $this->db->from('schedule');
        $this->db->where('schedule.lokasi', $lokasi);
        $this->db->where('schedule.tanggal_vaksin', $tanggal);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->id_schedule;
        }
        return false;
    }

    public function get_nama_kecamatan($kecamatan)
    {
        $this->db->select('name');
        $this->db->from('districts');
        $this->db->where('id', $kecamatan);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->name;
        }
        return false;
    }

    public function get_no_antrian($id_schedule)
    {
        $this->db->select('no_antrian');
        $this->db->from('vaccinery');
        $this->db->where('Schedule_id_schedule', $id_schedule);
        $this->db->order_by('id_vaccinery', 'DESC');
        $this->db->limit(1, 0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->no_antrian;
        } else { //Tidak ada baris sebelumnya
            return '0';
        }
        return false;
    }

    /*public function get_id_partners($partners){
        $this->db->select('id_partners');
        $this->db->from('partners');
        $this->db->where('nama_mitra', $partners);
        return $this->db->get();
    }*/

    public function get_lokasi_vaksin($id_partners)
    {
        //ambil data lokasi vaksin berdasarkan nama partners
        $this->db->where('Partners_id_partners', $id_partners);
        $this->db->order_by('lokasi', 'ASC');
        $query = $this->db->get('schedule');

        $output = '<option value="">Pilih Lokasi Vaksin</option>';

        //looping data
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->lokasi . '">' . $row->lokasi . '</option>';
        }
        //return data kabupaten
        return $output;
    }

    public function get_tanggal_vaksin($lokasi_vaksin)
    {
        //ambil data lokasi vaksin berdasarkan nama partners
        $this->db->where('lokasi', $lokasi_vaksin);
        $this->db->order_by('tanggal_vaksin', 'ASC');
        $query = $this->db->get('schedule');

        $output = '<option value="">Pilih Tanggal Vaksin</option>';

        //looping data
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->tanggal_vaksin . '">' . $row->tanggal_vaksin . '</option>';
        }
        //return data kabupaten
        return $output;
    }
    public function update($id_schedule, $data)
    {
        $this->db->where('id_schedule', $id_schedule);
        $this->db->update('schedule', $data);
    }
    public function hapus($id_schedule)
    {
        $this->db->where('id_schedule', $id_schedule);
        $this->db->delete('schedule');
    }
}
