<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Setting_User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('User/layout/Header');
            $this->load->view('User/Profil/Profile', $data);
            $this->load->view('User/layout/Footer');
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
            $this->db->update('user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan login ulang untuk memperbarui data</div>');
            redirect('setting_user');
        }
    }
}
