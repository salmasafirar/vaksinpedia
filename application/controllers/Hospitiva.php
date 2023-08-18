<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Hospitiva extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
    }

    public function index()
    {
        $data['partners'] = $this->db->get('partners')->result();
        $data['schedule'] = $this->db->get('schedule')->result();
        $this->load->model('M_vaccinery');
        $data['districts'] = $this->M_vaccinery->get_kecamatan();
        $this->load->view('Admin/layout/Header');
        $this->load->view('Admin/Hospitiva', $data);
        $this->load->view('Admin/layout/Footer');
    }

    //request data lokasi vaksin berdasarkan partners
    public function get_lokasi_vaksin()
    {
        $this->load->model('M_schedule');
        if ($this->input->post('partners')) {
            $id = $this->input->post('partners');
            echo $this->M_schedule->get_lokasi_vaksin($id);
        }
    }

    //request data tanggal vaksin berdasarkan lokasi vaksin
    public function get_tanggal_vaksin()
    {
        $this->load->model('M_schedule');
        if ($this->input->post('lokasi_vaksin')) {
            echo $this->M_schedule->get_tanggal_vaksin($this->input->post('lokasi_vaksin'));
        }
    }

    //request data kelurahan berdasarkan kecamatan
    public function get_kelurahan()
    {
        $this->load->model('M_vaccinery');
        if ($this->input->post('kecamatan')) {
            echo $this->M_vaccinery->get_kelurahan($this->input->post('kecamatan'));
        }
    }

    public function daftar()
    {
        $data = array(
            'nama_mitra' => $this->input->post('nama_mitra'),
            'nama' => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
            'password' => md5($this->input->post('password'))
        );
        $query = $this->db->insert('hospitiva', $data);
        if ($query == true) {
            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');
            redirect('Hospitiva');
        } else {
            $this->session->set_flashdata('info', '<div class="alert alert-danger">User tidak ditemukan!, silahkan mengisi data dengan benar!</div>');
            redirect('Hospitiva');
        }
    }
}
