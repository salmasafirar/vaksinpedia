<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Schedule_Hospitiva extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_schedule');
    }

    public function index()
    {
        $this->load->model('M_schedule');
        $data['dataSchedule'] = $this->M_schedule->get_data_schedule();

        $this->load->view('Hospitiva/layout/Header');
        $this->load->view('Hospitiva/Schedule_Hospitiva', $data);
        $this->load->view('Hospitiva/layout/Footer');
    }
    public function detail($id_schedule)
    {

        $data['content'] = 'Schedule_Hospitiva/detail';
        $data['detail'] = $this->M_schedule->detail($id_schedule);
        $this->load->view('Hospitiva/layout/Header');
        $this->load->view('Hospitiva/Schedule/Detail_Schedule_Hospitiva', $data);
        $this->load->view('Hospitiva/layout/Footer');
    }

    public function update()
    {
        $id_kategori = $this->input->post('id_schedule');
        $data = array(
            'nama_vaksin' => $this->input->post('nama_vaksin'),
            'lokasi' => $this->input->post('lokasi'),
            'tanggal_vaksin' => $this->input->post('tanggal_vaksin'),
            'jumlah_vaccinery' => $this->input->post('jumlah_vaccinery'),
        );
        $query = $this->M_schedule->update($id_kategori, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Data berhasil di-Update!</div>');
            redirect('setting_hospitiva');
        }
    }
}