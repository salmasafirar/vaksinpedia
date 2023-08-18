<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_login');
    }

	public function index()
	{
		$this->load->view('layout/Headerform');
        $this->load->view('Login');
        $this->load->view('layout/Footerform');
	}

    public function proses_login(){
        $user = $this->input->post('your_name');
        $pass = $this->input->post('your_pass');
        $this->M_login->proses_login($user, $pass);
    }

    public function logout(){

        $this->session->sess_destroy();
        redirect('Beranda');
    }
}