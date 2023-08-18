<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('M_dashboard_user');
        $data['jadwal'] = $this->M_dashboard_user->get_jadwal();
        $data['tanggal_vaksin'] = $this->M_dashboard_user->get_tanggal();
        $this->load->view('User/layout/Header');
        $this->load->view('User/Dashboard_User', $data);
        $this->load->view('User/layout/Footer');
    }
}
