<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
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
        $this->load->view('User/Pendaftaran/Header');
        $this->load->view('User/Pendaftaran', $data);
        $this->load->view('User/Pendaftaran/Footer');
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

        $this->load->model('M_schedule');
        //id schedule
        $lokasi = $this->input->post('lokasi_vaksin');
        $tanggal = $this->input->post('tanggal_vaksin');
        $id_schedule = $this->M_schedule->get_schedule($lokasi, $tanggal);

        //nama kecamatan
        $kec = $this->input->post('kecamatan');
        $nama_kecamatan = $this->M_schedule->get_nama_kecamatan($kec);

        //no antrian
        $antrian = $this->M_schedule->get_no_antrian($id_schedule);
        $no_antrian_int = (int)$antrian + 1;
        $no_antrian = (string)$no_antrian_int;

        $this->load->model('M_partners');
        //nama fasilitas kesehatan (mitra)
        $faskes = $this->input->post('partners');
        $fasilitas_kesehatan = $this->M_partners->get_faskes($faskes);

        $data = array(
            'nik' => $this->input->post('nik'),
            'nama_lengkap' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tanggal_lahir' => $this->input->post('tgl_lahir'),
            'fasilitas_kesehatan' => $fasilitas_kesehatan,
            'no_hp_sms' => $this->input->post('nohp_sms'),
            'no_hp_wa' => $this->input->post('nohp_wa'),
            'alamat' => $this->input->post('alamat'),
            'kecamatan' => $nama_kecamatan,
            'kelurahan' => $this->input->post('kelurahan'),
            'domisili' => $this->input->post('alamat_domisili'),
            'email' => $this->session->userdata('email'),
            'lokasi_vaksin' => $this->input->post('lokasi_vaksin'),
            'tanggal_vaksin' => $this->input->post('tanggal_vaksin'),
            'no_antrian' => $no_antrian,
            'User_id_user' => $this->session->userdata('id_author'),
            'Schedule_id_schedule' => $id_schedule,
        );
        $query = $this->db->insert('vaccinery', $data);
        if ($query == true) {
            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');
            redirect('Dashboard_User');
        } else {
            $this->session->set_flashdata('info', '<div class="alert alert-danger">User tidak ditemukan!, silahkan mengisi data dengan benar!</div>');
            redirect('Pendaftaran');
        }
    }
}
