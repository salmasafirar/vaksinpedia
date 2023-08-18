<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //$isi['content'] = '';
        //$isi['judul'] = 'Dashboard';
        $this->M_squrity->getSqurity();
        $this->load->model('M_dashboard');
        $data['vaccinery'] = $this->M_dashboard->countVaccinery();
        $data['partners'] = $this->M_dashboard->countPartners();
        $data['schedule'] = $this->M_dashboard->countSchedule();

        $this->load->model('M_vaccinery');
        $data['hasil'] = $this->M_vaccinery->vaccinery_perbulan();

        $this->load->model('M_schedule');
        $data['dataSchedule2'] = $this->M_schedule->get_data_schedule_top5();

        $this->load->view('Admin/layout/Header');
        $this->load->view('Admin/Dashboard', $data);
        $this->load->view('Admin/layout/Footer');
    }
}
