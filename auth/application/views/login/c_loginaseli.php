<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelLogin');
	}

	public function index()
	{
		$path = './assets/captcha/'; //posisi folder captcha

		//logic folder captcha jika tidak ada
		if (!file_exists($path)) {
			$buat = mkdir($path,0777); //membuat folder captcha
			if (!$buat) {
				return;
			}
		}

		//menammpilkan huruf acak untuk dijadikan captcha
		$kata = array_merge(range('0','0'),range('A','Z'));
		$acak = shuffle($kata);
		$str = substr(implode($kata), 0,5); //dimulai dari 0 dengan panjang 5 huruf dari hasil acak

		//memnyimpan huruf acak tsb ke dalam session
		$data_ses = array('captcha_str'=>$str);
		$this->session->set_userdata($data_ses);

		//array untuk menampilkan gambar captcha
		$vals = array(
			'word' => $str,
			'img_path' =>$path,
			'img_url'=>base_url().'assets/captcha/',
			'img_width'=> '150',
			'img_height'=> 40,
			'expiration'=>7200
		);
		$capc = create_captcha($vals);
		$data['captcha_image'] = $capc['image'];
		
		$this->load->view('login/head');
		$this->load->view('login/index',$data);
	}



	public function proses_login(){
	$username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
	$password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
	$po_captcha = $this->input->post('captcha'); //ambil isi dari inputan captcha
	$user = $this->ModelLogin->get($username); // Panggil fungsi get yang ada di ModelLogin.php

		if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Username Salah</div>'); // Buat session flashdata
			redirect('c_login'); // Redirect ke halaman login
		}elseif ($po_captcha != $this->session->userdata('captcha_str')){  //panggil captcha str
				$this->session->set_flashdata('notif','<div class="alert alert-warning">Captcha Salah</div>');
				redirect('c_login');
		}else{
			if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
				$session = array(
					'authenticated'=>true, // Buat session c_loginenticated dengan value true
					'username'=>$user->username,  // Buat session username
					'nama'=>$user->nama, // Buat session nama
					'role'=>$user->role // Buat session role
				);

				$this->session->set_userdata($session); // Buat session sesuai $session
				redirect('c_beranda'); // Redirect ke halaman beranda
			}else{
				$this->session->set_flashdata('notif','<div class="alert alert-warning">Password Salah</div>'); // Buat session flashdata
				redirect('c_login'); // Redirect ke halaman login
			}
		}
	}


		public function logout(){
				$this->session->sess_destroy(); // Hapus semua session
				redirect('c_login');  // Redirect ke halaman login
			}
}
