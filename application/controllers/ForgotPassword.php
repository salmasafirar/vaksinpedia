<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ForgotPassword extends CI_Controller {

	public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_login');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->view('layout/Headerform');
        $this->load->view('ForgotPassword');
        $this->load->view('layout/Footerform');
	}

    public function resetPassword() {
		$email = $this->input->get('email');
		$token = $this->input->get('token');
		
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        
        if($user) {
            $user_token = $this->db->get_where('user_token', ['token'=>$token])->row_array();
            if($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changePasswordView();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong token.</div>');
                redirect('Login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong email.</div>');
                redirect('Login');
        }
	}

    public function changePasswordView(){
        /*if (!$this->session->userdata('reset_email')) {
			redirect('ForgotPassword');
		}
		$this->form_validation->set_rules('password1','Password', 'trim|required|min_length[3]|matches[password1]');
		if ($this->form_validation->run()==false){
			$this->load->view('layout/Headerform');
            $this->load->view('ChangePassword');
            $this->load->view('layout/Footerform');
		}*/
        $this->load->view('layout/HeaderForgot');
        $this->load->view('ChangePassword');
        $this->load->view('layout/Footerform');
    }

    public function changePassword(){
        $password = md5($this->input->post('your_pass'));
        $email = $this->session->userdata('reset_email');
        
        $this->db->set('password', $password);
        $this->db->where('email', $email);
        $this->db->update('user');
        
        $this->session->unset_userdata('reset_email');
        
        $this->db->delete('user_token', ['email' => $email]);
        
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password berhasil diganti! Silahkan login</div>');
        redirect('ForgotPassword');
	}

    private function sendEmail($token, $type)
	{
		$config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'vaksinpedia@gmail.com',
            'smtp_pass' => 'Vaksinpedia2021', 
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
		];
		
		$this->email->initialize($config);
		$this->email->from('salmasr2019@gmail.com');
		$this->email->to($this->input->post('your_name'));
		
		if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message('Click this link to verify you account : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
		} else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'ForgotPassword/resetpassword?email=' . $this->input->post('your_name') . '&token=' . urlencode($token) . '">Reset Password</a>');
		}
		
		if ($this->email->send()) {
		    return true;
		} else {
		    echo $this->email->print_debugger();
		    die;
		}
	}

    public function forgotPassword() {
		$this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
		
        $email = $this->input->post('your_name');
        $user = $this->db->get_where('authors', ['email' => $email])->row_array();
        if($user) {
            $token = base64_encode(random_bytes(32));
            $user_token = [
            'email' => $email,
            'token' => $token,
            'date_created' => time()
        ];
        
            $this->db->insert('user_token', $user_token);
            $this->sendEmail($token, 'forgot');
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Please check your email to reset your password!</div');
            
            redirect('ForgotPassword');				
        } else {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email tidak valid atau tidak aktif!</div>');
            redirect('ForgotPassword');
        }
	}
    /*public function sendEmail(){
        
        if($this->request->getMethod()=='post'){
            $rules = [
               'email'=>[
                   'label' => 'Email',
                   'rules'=> 'required|valid_email',
                   'errors' => [
                       'required' =>'{field} field required',
                       'valid_email' => 'Valid {field} required'
                   ]
               ],
           ];
        }
        // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'kazuiz2019@gmail.com',  // Email gmail
            'smtp_pass'   => 'Salsha2116/',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        $alamatEmail = $this->input->post('your_name');

        //$this->M_login->proses_login($user, $pass);

        // membuat password baru secara random -> memanggil function randomPassword
        $newPassword = $this->M_login->randomPassword();
 
        // perlu dibuat sebarang pengacak
        $pengacak  = "NDJS3289JSKS190JISJI";
     
        // mengenkripsi password dengan md5() dan pengacak
        $newPasswordEnkrip = md5($pengacak . md5($newPassword) . $pengacak);
 
        // title atau subject email
        $title  = "New Password";
 
        // isi pesan email disertai password
        $pesan  = "Email Anda : ".$alamatEmail.". \nPassword Anda yang baru adalah ".$newPassword;
 
        // header email berisi alamat pengirim
        $header = "From: kazuis2016@gmail.com";
 
         // Load library email dan konfigurasinya
         $this->load->library('email', $config);

         // Email dan nama pengirim
         $this->email->from('kazuis2016@gmail.com');
 
         // Email penerima
         $this->email->to($alamatEmail); // Ganti dengan email tujuan
 
         // Subject email
         $this->email->subject('Password Akun Vaksinpedia Baru');
 
         // Isi email
         $this->email->message("Email Anda : ".$alamatEmail.". \nPassword Anda yang baru adalah ".$newPassword);
 
         // Tampilkan pesan sukses atau error
         if ($this->email->send()) {
            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Password baru telah direset dan sudah dikirim ke email Anda</div>');
            redirect('Login');
         } else {
            $this->session->set_flashdata('info','<div class="alert alert-danger">Pengiriman password baru ke email gagal</div>');
            redirect('ForgotPassword');
         }

        // mengirim email
        //$kirimEmail = mail($alamatEmail, $title, $pesan, $header);
 
        // cek status pengiriman email
        /*if ($kirimEmail) {
        
            // update password baru ke database (jika pengiriman email sukses)
            $this->db->set('password', $newPasswordEnkrip);
            $this->db->where('email', $alamatEmail);
            $this->db->update('authors');

            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Password baru telah direset dan sudah dikirim ke email Anda</div>');
            redirect('Login');
            
            //if ($hasil) echo "Password baru telah direset dan sudah dikirim ke email Anda";
        }
        else {
            $this->session->set_flashdata('info','<div class="alert alert-danger">Pengiriman password baru ke email gagal</div>');
            redirect('ForgotPassword');
        }//echo "Pengiriman password baru ke email gagal";*/

        /*// Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'salmasr2019@gmail.com',  // Email gmail
            'smtp_pass'   => 'Salma2019',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('no-reply@masrud.com', 'MasRud.com');

        // Email penerima
        $this->email->to('kazuis2016@gmail.com'); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        $this->email->attach('https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');

        // Subject email
        $this->email->subject('Kirim Email dengan SMTP Gmail CodeIgniter | MasRud.com');

        // Isi email
        $this->email->message("Ini adalah contoh email yang dikirim menggunakan SMTP Gmail pada CodeIgniter.<br><br> Klik <strong><a href='https://masrud.com/kirim-email-codeigniter/' target='_blank' rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }*/

}