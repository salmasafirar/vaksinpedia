<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('layout/Headerform');
        $this->load->view('Signup');
        $this->load->view('layout/Footerform');
    }

    public function daftar()
    {
        $pass = md5($this->input->post('pass'));
        $data = array(
            'nama' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('number'),
            'password' => $pass
        );
        $query = $this->db->insert('user', $data);
        if ($query == true) {
            $this->session->set_userdata($data);
            redirect('Dashboard');
        } else {
            $this->session->set_flashdata('info', '<div class="alert alert-danger">Signup Gagal, Silahkan Masukan Data dengan Benar !</div>');
            redirect('signup');
        }
    }
}
