<?php

class Pencarian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pencarian');
    }


    public function index()
    {
        $keyword = $this->input->post('keyword');
        $data['lokasi'] = $this->M_pencarian->get_data_lokasi($keyword);

        $this->load->view('User/layout/Header');
        $this->load->view('User/Pencarian', $data);
        $this->load->view('User/layout/Footer');
    }
}
