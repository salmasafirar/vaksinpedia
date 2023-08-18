<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Setting_Hospitiva extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_schedule');
    }

    public function index()
    {
        $this->load->model('M_schedule');
        $data['dataSchedule2'] = $this->M_schedule->get_data_schedule_top5();

        $data['user'] = $this->db->get_where('hospitiva', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('Hospitiva/layout/header');
            $this->load->view('Hospitiva/Profil/Profile', $data);
            $this->load->view('Hospitiva/layout/footer');
        } else {
            $email = $this->session->userdata('email');

            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                'alamat'  => htmlspecialchars($this->input->post('alamat', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
            ];

            $this->db->where('email', $email);
            $this->db->update('hospitiva', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan login ulang untuk memperbarui data</div>');
            redirect('setting_hospitiva');
        }
    }
    public function hapus($id_schedule)
    {
        $query = $this->M_schedule->hapus($id_schedule);
        if ($query = true) {
            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect('Setting_Hospitiva');
        }
    }
}
