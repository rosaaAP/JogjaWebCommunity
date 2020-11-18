<?php
class C_login extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->library(array('form_validation', 'Recaptcha'));
    }


	public function index()
	{
		 $data = array(
            'username' => set_value('username'),
            'password' => set_value('password'),
            'captcha' => $this->recaptcha->getWidget(), // menampilkan recaptcha
            'script_captcha' => $this->recaptcha->getScriptTag(), // javascript recaptcha ditaruh di head
        );

		$this->load->view('utama/head');
		$this->load->view('login/index',$data);
	}

	public function proses_login(){
		if($this->M_login->logged_id())
			{
				//jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
				redirect("C_beranda");

			}else{

				//set form validation
	            $this->form_validation->set_rules('username', 'Username', 'required');
	            $this->form_validation->set_rules('password', 'Password', 'required');

	            $recaptcha = $this->input->post('g-recaptcha-response');
        $response = $this->recaptcha->verifyResponse($recaptcha);

        if ($this->form_validation->run() == FALSE || !isset($response['success']) || $response['success'] <> true) {
            $this->index();
        } else {

	            if ($this->form_validation->run() == TRUE) {
			            		
			            $username = $this->input->post("username", TRUE);
			            $password = MD5($this->input->post('password', TRUE));
	            

			           	 $cek = $this->M_login->cek_login($username)->num_rows();
		           		 $cek_akun = $this->M_login->cek_login($username)->row_array();
		           		 $checking = $this->M_login->check_login('tb_member', array('username' => $username), array('password' => $password));
		           		// $data = $this->Model_login->ambil_data_semua_akun($where)->row_array();

            if ($cek > 0) {
                if ($cek_akun['status_akun'] == 1) {
                        if ($cek_akun['password'] == $password) {
                        	if ($checking != FALSE) {
	                		foreach ($checking as $apps) {
                            $session_data = array(
	                        'member_id'   => $apps->id_member,
	                        'username' => $apps->username,
	                        'pass' => $apps->password,
	                        'role'=> $apps->role,
	                        'nama' => $apps->nama
	                    );
	                    //set session userdata
	                    $this->session->set_userdata($session_data);
						redirect('C_beranda');
		               	}
		            }else{
		            	$this->session->set_flashdata('notif','<div class="alert alert-warning">Maaf! Username / Password anda tidak terdaftar</div>'); // Buat session flashdata
		            	redirect('C_login');
	           			}
                    } else {
                        $this->session->set_flashdata('notif','<div class="alert alert-warning">Password yang Anda masukkan salah :(</div>'); 
                        redirect('C_login');
                    	}
	                } else {
	                    $this->session->set_flashdata('notif','<div class="alert alert-warning">Silahkan Aktivasi Akun Anda :)</div>'); 
	                    redirect('C_login');
	               		 }
		            } else {
		                $this->session->set_flashdata('notif','<div class="alert alert-warning">Maaf username Anda tidak terdaftar :(</div>');
		                redirect('C_login');
		            }
	        }
	    }
		}
	}
	
	public function aktivasi()
    {
        if (!$this->session->userdata('aktivasi_akun')) {
            $this->session->set_flashdata('notif','<div class="alert alert-warning">username terdaftar(</div>');
            redirect(site_url('C_login'));
        }

        $this->load->view("utama/head");
        $this->load->view("Aktivasi_akun");

        if (isset($_POST['btn_aktivasi'])) {
            $username = $this->session->userdata('aktivasi_akun');
            $this->M_login->ubah_status_akun($username);

            $this->session->set_flashdata('notif','<div class="alert alert-warning">Akun berhasil di aktivasi :). Silahkan login.</div>');
            $this->session->unset_userdata('aktivasi_akun');
            redirect(site_url('C_login'));
        }
    }
    
            	public function logout(){
				$this->session->sess_destroy(); // Hapus semua session
				redirect('C_utama');  // Redirect ke halaman login
		}
}

