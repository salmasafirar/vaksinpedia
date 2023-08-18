<?php

class M_informasi extends CI_Model
{
    public function get_data_informasi($id_vaccinery)
    {
        $this->db->select('*');
        $this->db->from('vaccinery');
        $this->db->join('schedule', 'schedule.id_schedule = vaccinery.Schedule_id_schedule');
        $this->db->where('vaccinery.id_vaccinery', $id_vaccinery);
        return $this->db->get();
    }
}
