<?php

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index()
	{
		
		$this->load->view('login/head');
		$this->load->view('login/index');
	}

    public function proses_login(){
		if($this->M_login->logged_id())
			{
				//jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
				redirect(base_url('C_beranda')); 

			}else{

				//jika session belum terdaftar

				//set form validation
	            $this->form_validation->set_rules('username', 'Username', 'required');
	            $this->form_validation->set_rules('password', 'Password', 'required');

	            //set message form validation
	            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
	                <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

	            //cek validasi
				if ($this->form_validation->run() == TRUE) {

				//get data dari FORM
	            $username = $this->input->post("username", TRUE);
	            $password = MD5($this->input->post('password', TRUE));
	            
	            //checking data via model
	            $checking = $this->M_login->check_login('tb_admin', array('username' => $username), array('password' => $password));
	            
	            //jika ditemukan, maka create session
	            if ($checking != FALSE) {
	                foreach ($checking as $apps) {

	                    $session_data = array(
	                        'admin_id'   => $apps->id_admin,
	                        'username' => $apps->username,
	                        'pass' => $apps->password,
	                        'nama' => $apps->nama
	                    );
	                    //set session userdata
	                    $this->session->set_userdata($session_data);

	                redirect(base_url('C_beranda')); 
	                }
	            }else{
	            	$this->session->set_flashdata('notif',
	            	'<div class="alert alert-warning">Maaf! Username / Pasword anda tidak terdaftar</div>');
	            	redirect(base_url('C_login')); 

	            }

	        }
		}
	}

		public function logout(){
				$this->session->sess_destroy(); // Hapus semua session
				redirect(base_url('C_login'));  // Redirect ke halaman login
		}
}
