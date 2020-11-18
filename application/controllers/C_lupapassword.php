<?php
class C_lupapassword extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); {
            $this->load->library('form_validation');
            $this->load->library('mail');
            $this->load->model('M_login');
        }
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("utama/head");
            $this->load->view("Lupa_password");
        } else {
            $email = $_POST['email'];
            $user = $this->M_login->ambil_data_by_email($email)->row_array();
            if ($user) {
                $token = base64_encode(random_bytes(32));
                $insert_token = array(
                    'email' => $email,
                    'token' => $token,
                    'date_created' => date('Y-m-d')
                );
                $this->M_login->tambah_token($insert_token);
                $content .= '<p>Silahkan<a href="' . site_url('C_lupapassword/reset_password?email=') . $email . '&token=' . urlencode($token) . '"> KLIK DISINI</a> untuk ganti password.</p>';
                $this->mail->send_mail('Lupa Password', $email, $content);

                $this->session->set_flashdata('notif','<div class="alert alert-warning">Silahkan cek email untuk ganti password</div>');
                redirect('C_lupapassword');
            } else {
                $this->session->set_flashdata('notif','<div class="alert alert-warning">Email tidak terdaftar sebagai user</div>');
                redirect('C_lupapassword');
            }
        }
    }

    public function reset_password()
    {
        $email = $_GET['email'];
        $token = $_GET['token'];

        $user = $this->M_login->ambil_data_by_email($email)->row_array();

        if ($user) {
            $user_token = $this->M_login->ambil_data_token($token)->row_array();
            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->ganti_password();
            } else {
                $this->session->set_flashdata('notif','<div class="alert alert-warning">Ganti password gagal</div>');
                redirect(site_url('C_login'));
            }
        } else {
            $this->session->set_flashdata('notif','<div class="alert alert-warning">Email salah</div>');
            redirect(site_url('C_login'));
        }
    }

    public function ganti_password()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect(site_url('C_login'));
        }

        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[7]|max_length[20]');
        $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'trim|required|min_length[7]|max_length[20]|matches[password]',array('required' => 'Kolom tidak boleh kosong!', 'matches' => 'PASSWORD YANG ANDA INPUTKAN TIDAK SAMA!'));;
        //$this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("utama/head");
            $this->load->view("Ganti_password");
        } else {
            $password = md5($_POST['password']);
            $email = $this->session->userdata('reset_email');

            $this->M_login->ubah_password($password, $email);
            $this->M_login->hapus_token($email);

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('notif','<div class="alert alert-warning">Password berhasil diganti. Silahkan login</div>');
            redirect(site_url('C_login'));
        }
    }
}
