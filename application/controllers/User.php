<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_user');
    }

	public function index()
	{
		$this->load->view('layout/Headerform');
        $this->load->view('Dashboard2');
        $this->load->view('layout/Footerform');
	}
}