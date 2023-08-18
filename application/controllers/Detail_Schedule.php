<?php

class Detail_Schedule extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_schedule');
    }


    // public function index($id_schedule)
    // {
    //     $data['content'] = 'Data_Schedule';
    //     //$isi['judul'] = 'Form Edit Buku';
    //     //$isi['schedule'] = $this->db->get('schedule')->result();
    //     $data['detail'] = $this->M_schedule->detail($id_schedule);
    //     $this->load->view('Hospitiva/layout/Header');
    //     $this->load->view('Hospitiva/Schedule/Detail_Schedule', $data);
    //     $this->load->view('Hospitiva/layout/Footer');
    // }

    public function index()
    {
        $this->load->view('Hospitiva/layout/Header');
        $this->load->view('Hospitiva/Schedule/Detail_Schedule', $data);
        $this->load->view('Hospitiva/layout/Footer');
    }
}
