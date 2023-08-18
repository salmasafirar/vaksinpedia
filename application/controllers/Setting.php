<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $this->load->model('M_schedule');
        // $data['dataSchedule2'] = $this->M_schedule->get_data_schedule_top5();

        $data['user'] = $this->db->get_where('admin', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('Admin/layout/Header');
            $this->load->view('Admin/Profile', $data);
            $this->load->view('Admin/layout/Footer');
            //$this->db->get('admin')->result();
        } else {
            // $nama = $this->input->post('nama');
            // $email = $this->input->post('email');
            $id = $this->session->userdata('id_author');
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
            $this->db->update('admin', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan login ulang untuk memperbarui data</div>');
            redirect('setting_user');
        }
    }
}
