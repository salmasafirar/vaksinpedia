<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Partners extends CI_Controller
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
        $data['mitra'] = $this->db->get('hospitiva')->result();

        $this->load->view('Admin/layout/Header');
        $this->load->view('Admin/Partners', $data);
        $this->load->view('Admin/layout/Footer');
    }
    public function detail($id_partners)
    {

        $data['content'] = 'Partners/detail';
        //$isi['judul'] = '';
        //$isi['vaccinery'] = $this->db->get('vaccinery')->result();
        $data['detail'] = $this->M_partners->detail($id_partners);
        $this->load->view('Admin/layout/Header');
        $this->load->view('Admin/Partners/Detail_Partners', $data);
        $this->load->view('Admin/layout/Footer');
    }
    public function hapus($id_partners)
    {
        $query = $this->M_partners->hapus($id_partners);
        if ($query = true) {
            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
            redirect('Partners');
        }
    }

    public function edit($id_partners)
    {
        $data['content'] = 'Partners/edit';
        $data['detail'] = $this->M_partners->edit($id_partners);
    }
    public function update()
    {
        $id_partners = $this->input->post('id_partners');
        $data = array(
            'nama_mitra' => $this->input->post('nama_mitra'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'kota' => $this->input->post('kota'),
            'nomor_telepon' => $this->input->post('nomor_telepon')
        );
        $query = $this->M_partners->update($id_partners, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Data berhasil di-Update!</div>');
            redirect('Partners');
        }
    }

    public function tambah()
    {
        $this->load->model('M_partners');
        //id hospitiva
        $mitra = $this->input->post('nama_mitra');
        $id_hospitiva = $this->M_partners->get_partners($mitra);

        $data = array(
            'nama_mitra' => $this->input->post('nama_mitra'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'kota' => $this->input->post('kota'),
            'nomor_telepon' => $this->input->post('nomor_telepon'),
            'Hospitiva_id_hospitiva' => $id_hospitiva
        );
        $query = $this->db->insert('partners', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Data berhasil ditambah!</div>');
            redirect('Partners');
        } else {
            $this->session->set_flashdata('info', $query);
            redirect('Partners');
        }
    }
}
