<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Partners_Hospitiva extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_partners');
    }

    public function index()
    {
        $this->load->model('M_partners');
        $data['dataPartners'] = $this->M_partners->get_data_partners();

        $this->load->view('Hospitiva/layout/Header');
        $this->load->view('Hospitiva/Partners_Hospitiva', $data);
        $this->load->view('Hospitiva/layout/Footer');
    }
    public function detail($id_partners)
    {

        $data['content'] = 'Partners_Hospitiva/detail';
        //$isi['judul'] = '';
        //$isi['vaccinery'] = $this->db->get('vaccinery')->result();
        $data['detail'] = $this->M_partners->detail($id_partners);
        $this->load->view('Hospitiva/layout/Header');
        $this->load->view('Hospitiva/Partners_Hospitiva/Detail_Partners', $data);
        $this->load->view('Hospitiva/layout/Footer');
    }
}
