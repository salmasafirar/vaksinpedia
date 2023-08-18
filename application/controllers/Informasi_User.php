<?php

class Informasi_User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_informasi');
    }


    public function index()
    {
        $this->load->model('M_informasi');
        $data['user'] = $this->db->get_where('vaccinery', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('User/layout/Header');
        $this->load->view('User/Informasi', $data);
        $this->load->view('User/layout/Footer');
    }
}
