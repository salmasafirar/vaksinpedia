<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Syarat extends CI_Controller {

	public function __construct()
    {
        parent:: __construct();
    }

	public function index()
	{
		$this->load->view('layout/Headerform');
        $this->load->view('Syarat');
        $this->load->view('layout/Footerform');
	}
}