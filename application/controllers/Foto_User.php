<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Foto_User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //$this->load->model('M_login');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('User/layout/Header');
        $this->load->view('User/Profil/Foto_profile', $data);
        $this->load->view('User/layout/Footer');
    }

    public function edit()
    {

        $upload_image = $_FILES['foto_profil']['name'];
        $email = $this->session->userdata('email');

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            // $config['max_size'] = '2048';
            $config['upload_path'] = './assets/gambar';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_profil')) {
                //$old_image = $data['user']['foto_profil'];
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto_profil', $new_image);
                $this->db->where('email', $email);
                $this->db->update('user');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gambar berhasil diubah!</div>');
                redirect('foto_user');
            } else {
                echo $this->upload->display_errors();
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pilih file gambar terlebih dahulu!</div>');
            redirect('foto_user');
        }
    }

    public function hapus()
    {
        $email = $this->session->userdata('email');
        $this->db->set('foto_profil', 'default.jpg');
        $this->db->where('email', $email);
        $this->db->update('user');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gambar berhasil dihapus!</div>');
        redirect('foto_user');
    }
}
