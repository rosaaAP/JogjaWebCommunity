<?php
class C_user extends CI_Controller {

	public function __construct()
    {
        parent::__construct(); {
       		$this->load->model('M_user');
		$this->load->library('form_validation');
		$this->load->library('mail');
        }
    }


	public function register()
	{	
		$this->load->view('utama/head');
		$this->load->view('user/register');
	}

	public function proses_register()
	{ //validasi
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[tb_member.username]',array('required' => 'Kolom tidak boleh kosong!', 'is_unique' => 'MAAF USERNAME SUDAH TERDAFTAR!'));
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|min_length[17]|max_length[35]|is_unique[tb_member.email]',array('required' => 'Kolom tidak boleh kosong!', 'is_unique' => 'MAAF EMAIL SUDAH TERDAFTAR!'));
		$this->form_validation->set_rules('nama', 'Nama', 'required|min_length[5]|max_length[50]',array('required' => 'Kolom tidak boleh kosong!'));
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[7]|max_length[30]');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]',array('required' => 'Kolom tidak boleh kosong!', 'matches' => 'PASSWORD YANG ANDA INPUTKAN TIDAK SAMA!'));
		$this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required',array('required' => 'KOLOM TIDAK BOLEH KOSONG!'));

       	if ( $this->form_validation->run() === FALSE ) {
			$this->load->view("utama/head");
			$this->load->view("user/register");
		}else{
            $nama_member = htmlspecialchars($_POST['nama']);
            $email_member = htmlspecialchars($_POST['email']);
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $tgl_lhr = htmlspecialchars($_POST['tgl_lhr']);
            $tgl_daftar = htmlspecialchars($_POST['tgl_daftar']);
            $pekerjaan = htmlspecialchars($_POST['pekerjaan']);
       //     $role = htmlspecialchars($_POST['role']);

            if (isset($_POST['btn_daftar'])) {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d');
                $insert_akun = array(
				'username' => $username,
				'email' => $email_member,
				'password' =>md5($password),
				'nama' => $nama_member,
				'tgl_lhr' => $tgl_lhr,
				'pekerjaan' => $pekerjaan,
//				'fotoprofil' => 'usericon.png'
				'tgl_daftar' => $now,
//				'role' => $role,
                'status_akun' => 0
//                'status_blok' => 'N'

                );
                $this->M_user->register_akun($insert_akun);

                $akun = [
                    'nama' => $nama_member,
                    'email' => $email_member,
                    'username' => $username,
                    'password' => $password
                ];

                $content = '<p><b>Data ini bersifat Privasi.</b> Gunakan akun dibawah ini untuk melakukan login dan aktivasi akun Anda</p>';
                $content .= '<p>Nama Lengkap = "' . $akun['nama'] . '"</p>';
                $content .= '<p>Username = "' . $akun['username'] . '"</p>';
                $content .= '<p>Password = "' . $akun['password'] . '"</p>';
                //$content .= '<p>Klik Tombol dibawah ini untuk aktivasi!</p>';
                //$content .= '<p><a href="' . base_url() . 'C_user/aktivasi_akun?usr=' . $akun['username'] . '&em=' . $akun['email'] . '">Klik disini</a></p>';
                //$content .= '<p><a href="' . site_url('C_login') . '">LihatKlik</a></p>';
                $content .= '<p>Silahkan <a href="' . site_url('C_user/aktivasi_akun?usr=') . $akun['username'] . '&em=' . $akun['email'] . '">KLIK DISINI</a> untuk aktivasi Akun</p>';
                
                $this->mail->send_mail('Aktivasi Akun', $email_member, $content);

                $this->session->set_flashdata('notif','<div class="alert alert-warning">Registrasi berhasil! 
                	Silahkan cek email untuk aktivasi akun!</div>');
				redirect(site_url('C_login'));
            }
        }
    }

     public function aktivasi_akun()
    {
        $username = $_GET['usr'];
        $email = $_GET['em'];

        $akun = $this->M_user->ambil_data_akun($username, $email)->row_array();
        $status_akun = $this->M_user->ambil_data_akun_status($username)->row_array();

        if ($akun) {
            if ($status_akun) {
                $this->session->set_flashdata('message', '<div class="alert 
                alert-info" role="alert">Akun Sudah Di Aktivasi!</div>');
                redirect(site_url('C_login'));
            } else {
                $this->session->set_userdata('aktivasi_akun', $username);
                $this->aktivasi();
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert 
                alert-danger" role="alert">Username atau Email Belum Terdaftar!</div>');
            redirect(site_url('C_login'));
        }
    }

     public function aktivasi()
    {
        if (!$this->session->userdata('aktivasi_akun')) {
            $this->session->set_flashdata('notif','<div class="alert alert-warning">aaaaaaaa(</div>');
            redirect(site_url('C_login'));
        }

        $this->load->view("utama/head");
        $this->load->view("Aktivasi_akun");

        if (isset($_POST['btn_aktivasi'])) {
            $username = $this->session->userdata('aktivasi_akun');
            $this->M_user->ubah_status_akun($username);

            $this->session->set_flashdata('notif','<div class="alert alert-warning">wwwwww(</div>');
            $this->session->unset_userdata('aktivasi_akun');
            redirect(site_url('C_login'));
        }
    }

	public function index()
	{
		$data['varData']= $this->M_user->tampil_data();
		$this->load->view('templates/upheader');
		$this->load->view('templates/header',$data);
		$this->load->view('user/index',$data);
		$this->load->view('templates/footer');
                
    }


	public function ubahdatafoto()
	{	
		$config['upload_path']          = './images/';
        $config['allowed_types']        = 'jpg|png|jpeg|';
        $config['max_size']             = '0';
        $config['max_width']            = '0';
        $config['max_height']           = '0';

        $this->load->library('upload',$config); //call library upload 
        $this->upload->initialize($config);

		$data['varData']= $this->M_user->tampil_data();
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		//$this->form_validation->set_rules('email', 'Email', 'required');
		//$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		//$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');
//		$this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/upheader');
			$this->load->view('templates/header',$data);
			$this->load->view('user/ubahfoto',$data);
			$this->load->view('templates/footer');
//for ubah data profil dan foto
		} else if (! $this->upload->do_upload('fotoprofil')) {
			$this->M_user->simpan_ubahdata();
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Password dan foto berhasil diubah</div>'); // Buat session flashdata
			redirect("C_user");
		} else {
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name']; //set file name ke variable image
			$this->M_user->simpan_ubahfoto($image);
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Foto profil berhasil diubah!</div>'); // Buat session flashdata
			redirect("C_user");
		}
	}

	public function ubahdatapassword()
	{	
		$config['upload_path']          = './images/';
        $config['allowed_types']        = 'jpg|png|jpeg|';
        $config['max_size']             = '0';
        $config['max_width']            = '0';
        $config['max_height']           = '0';

        $this->load->library('upload',$config); //call library upload 
        $this->upload->initialize($config);

	$data['varData']= $this->M_user->tampil_data();
	$this->form_validation->set_rules('nama', 'Nama', 'required');
		//$this->form_validation->set_rules('email', 'Email', 'required');
		//$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[7]|max_length[20]');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]',array('required' => 'Kolom tidak boleh kosong!', 'matches' => 'PASSWORD YANG ANDA INPUTKAN TIDAK SAMA!'));
		//$this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/upheader');
			$this->load->view('templates/header',$data);
			$this->load->view('user/ubahpassword',$data);
			$this->load->view('templates/footer');
//for ubah data profil dan foto
		} else if (! $this->upload->do_upload('fotoprofil')) {
			$this->M_user->simpan_ubah_pswd();
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Password berhasil diubah</div>'); // Buat session flashdata
			redirect("C_user");
		} else {
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name']; //set file name ke variable image
			$this->M_user->simpan_pswd($image);
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Foto profil berhasil diubah!</div>'); // Buat session flashdata
			redirect("C_user");
		}
	}

}
