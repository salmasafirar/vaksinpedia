<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Vaccinery_Hospitiva extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_vaccinery');
    }

    public function index()
    {
        //$isi['content'] = '';
        //$isi['judul'] = 'Vaccinery';
        $this->load->model('M_vaccinery');
        $data['dataVaccinery'] = $this->M_vaccinery->get_data_vaccinery();
        

        // $this->load->view('Admin/Vaccinery/Detail_Vaccinery', $data);
        $this->load->view('Hospitiva/layout/Header');
        $this->load->view('Hospitiva/Vaccinery_Hospitiva', $data);
        $this->load->view('Hospitiva/layout/Footer');
    }
    public function detail($id_vaccinery)
    {

        $data['content'] = 'Vaccinery_Hospitiva/detail';
        //$isi['judul'] = '';
        //$isi['vaccinery'] = $this->db->get('vaccinery')->result();
        $data['detail'] = $this->M_vaccinery->detail($id_vaccinery);
        $this->load->view('Hospitiva/layout/Header');
        $this->load->view('Hospitiva/Vaccinery/Detail_Vaccinery_Hospitiva', $data);
        $this->load->view('Hospitiva/layout/Footer');
    }
}




    