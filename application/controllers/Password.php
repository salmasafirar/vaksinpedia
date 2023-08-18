<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Password extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $email = $this->session->userdata('email');

        $password = md5($this->input->post('password'));
        $password_lama = md5($this->input->post('password_lama'));

        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim');
        $this->form_validation->set_rules('password', 'Password Baru', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('konf_password', 'Konfirmasi Password Baru', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {

            $this->load->view('Admin/layout/Header');
            $this->load->view('Admin/Password', $data);
            $this->load->view('Admin/layout/Footer');
        } else {
            if ($password_lama != $data['user']['password']) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama salah!</div>');
                redirect('password');
            } else {
                if ($password_lama == $password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan password lama!</div>');
                    redirect('password');
                } else {
                    $this->db->set('password', $password);
                    $this->db->where('email', $email);
                    $this->db->update('admin');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diubah!</div>');
                    redirect('setting');
                }
            }
        }
    }
}
