<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Vaccinery extends CI_Controller
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
        $this->load->view('Admin/layout/Header');
        $this->load->view('Admin/Vaccinery', $data);
        $this->load->view('Admin/layout/Footer');
    }

    public function edit($id_vaccinery)
    {
        $isi['content'] = 'Vaccinery/Edit_Vaccinery';
        $isi['judul'] = 'Form Edit Vaccinery';
        $isi['data'] = $this->M_vaccinery->edit($id_vaccinery);
        $this->load->view('Admin/layout/Header');
        $this->load->view('Admin/Vaccinery/Edit_Vaccinery', $isi);
        $this->load->view('Admin/layout/Footer');
    }

    public function update()
    {
        $id_vaccinery = $this->input->post('id_vaccinery');
        $data = array(
            'nik' => $this->input->post('nik'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'fasilitas_kesehatan' => $this->input->post('fasilitas_kesehatan'),
            'no_hp_sms' => $this->input->post('no_hp_sms'),
            'no_hp_wa' => $this->input->post('no_hp_wa'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kelurahan' => $this->input->post('kelurahan'),
            'domisili' => $this->input->post('domisili'),
            'lokasi_vaksin' => $this->input->post('lokasi_vaksin'),
            'tanggal_vaksin' => $this->input->post('tanggal_vaksin'),
            'no_antrian' => $this->input->post('no_antrian')
        );
        $query = $this->M_vaccinery->update($id_vaccinery, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Data berhasil di-Update!</div>');
            redirect('Vaccinery');
        }
    }
    public function hapus($id_vaccinery)
    {
        $query = $this->M_vaccinery->hapus($id_vaccinery);
        if ($query = true) {
            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect('Vaccinery');
        }
    }
}
