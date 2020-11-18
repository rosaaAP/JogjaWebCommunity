<?php

class C_member Extends CI_Controller{
 
		function __construct(){
			parent::__construct();		
			$this->load->model('M_member');
			$this->load->helper('url');
			}
	 
		public function index(){
        if($this->M_login->logged_id())
		{
 
        $data['data'] = $this->M_member->get_member();

        //load view mahasiswa view
        $this->load->view('template/sidebar');
        $this->load->view('member/index', $data);
        $this->load->view('template/footer');

        }else{
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Maaf! Silahkan Login Dahulu</div>');
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("C_login");

		}
    }


		function hapus($id_member){
			$where = array('id_member' => $id_member);
			$this->M_member->hapus_data($id_member,'dataa');
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Data Anggota berhasil dihapus!</div>'); // Buat session flashdata
			redirect('C_member');
			}

		public function ubahprofil($id_member){
			$data['member']= $this->M_member->getMemberByID($id_member);
			
			$this->form_validation->set_rules('role', 'Role', 'required');
			if ($this->form_validation->run() == FALSE){
				$this->load->view('template/sidebar');
		        $this->load->view('member/ubahprofil', $data);
		        $this->load->view('template/footer');
			} else {
				
				$this->M_member->ubahDataMember();
				$this->session->set_flashdata('notif','<div class="alert alert-info">Data Anggota berhasil diubah!</div>'); // Buat session flashdata
				redirect('C_member');
				}
			}


		function update(){
			$id_member = $this->input->post('id_member');
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$email = $this->input->post('email');
			$pekerjaan = $this->input->post('pekerjaan');
			$role = $this->input->post('role');
			$fotoprofil = $this->input->post('fotoprofil');
	 
		 
			$data = array(
				'nama' => $nama,
				'username' => $username,
				'password' => $password,
				'email' => $email,
				'pekerjaan' => $pekerjaan,
				'role' => $role,
				'fotoprofil' => $fotoprofil
			);
				 $where = array(
				'id_member' => $id_member
			);
		 
			$this->M_member->update_data($id_member,$data);
			redirect('c_member/index');
		}

		function detail($id_member){
			$data['dtlproject']= $this->M_member->hitungJumlah($id_member);
			$this->load->view('template/sidebar');
			$this->load->view('member/detail',$data);
		    $this->load->view('template/footer');
			}
			
		public function cetak_member()
	{
		$data['data']= $this->M_member->getAllmembercetak();
		$this->load->view('member/cetak_member', $data);
	}

}