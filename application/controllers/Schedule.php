<?php

class Schedule extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_schedule');
    }


    public function index()
    {
        //$isi['content'] = '';
        //$isi['judul'] = 'Dashboard';
        $data['dataSchedule'] = $this->M_schedule->get_data_schedule();
        $data['dataSchedule2'] = $this->M_schedule->get_data_schedule_top5();

        $this->load->view('Admin/layout/Header');
        $this->load->view('Admin/Schedule', $data);
        $this->load->view('Admin/layout/Footer');
    }

    public function detail($id_schedule)
    {
        $data['content'] = 'Schedule/detail';
        $data['detail'] = $this->M_schedule->detail($id_schedule);
        $this->load->view('Admin/layout/Header');
        $this->load->view('Admin/Schedule/Detail_Schedule', $data);
        $this->load->view('Admin/layout/Footer');
    }
}
