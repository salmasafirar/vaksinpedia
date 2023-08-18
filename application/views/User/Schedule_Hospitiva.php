<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Schedule_Hospitiva extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_schedule');
    }

    public function index()
    {
        //$isi['content'] = '';
        //$isi['judul'] = 'Schedule';
        $this->load->model('M_schedule');
        $data['dataSchedule'] = $this->M_schedule->get_data_schedule();


        // $this->load->view('Admin/Schedule/Detail_Schedule', $data);
        $this->load->view('Hospitiva/layout/Header');
        $this->load->view('Hospitiva/Schedule_Hospitiva', $data);
        $this->load->view('Hospitiva/layout/Footer');
    }
    public function detail($id_schedule)
    {

        $data['content'] = 'Schedule_Hospitiva/detail';
        //$isi['judul'] = '';
        //$isi['schedule'] = $this->db->get('schedule')->result();
        $data['detail'] = $this->M_schedule->detail($id_schedule);
        $this->load->view('Hospitiva/layout/Header');
        $this->load->view('Hospitiva/Schedule/Detail_Schedule_Hospitiva', $data);
        $this->load->view('Hospitiva/layout/Footer');
    }
}
