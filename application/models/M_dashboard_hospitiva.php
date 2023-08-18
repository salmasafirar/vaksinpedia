<?php

class M_dashboard_hospitiva extends CI_Model
{

    public function countVaccinery()
    {
        return $this->db->count_all('vaccinery');
    }

    public function countPartners()
    {
        return $this->db->count_all('partners');
    }

    public function countSchedule()
    {
        return $this->db->count_all('schedule');
    }
}
