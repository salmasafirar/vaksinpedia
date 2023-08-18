<?php

class M_login extends CI_Model
{

    public function proses_login($user, $pass)
    {
        $password = md5($pass);
        function isNumber($user)
        {
            $user = $this->db->where('no_hp', $user);
        }
        function isNotNumber($user)
        {
            $user = $this->db->where('email', $user);
        }

        $pass = $this->db->where('password', $password);
        $query = $this->db->get('authors');

        if ($query->num_rows() == 1) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'id_author'        => $row->id_author,
                    'nama'            => $row->nama,
                    'no_hp'         => $row->no_hp,
                    'email'         => $row->email,
                    'password'        => $row->password,
                    'foto_profil'   => $row->foto_profil,
                    'level'         => $row->level
                );
                $this->session->set_userdata($sess);
            }
            if ($this->session->userdata('level') == 1) {
                redirect('Dashboard');
            } else if ($this->session->userdata('level') == 2) {
                redirect('Dashboard_Hospitiva');
            } else if ($this->session->userdata('level') == 3) {
                redirect('Dashboard_User');
            }
        } else {
            $this->session->set_flashdata('info', '<div class="alert alert-danger">Login Gagal, Silahkan Periksa Email/Nomor Handphone dan Password !</div>');
            redirect('Login');
        }
    }
}
