<?php

class C_admin Extends CI_Controller{

    	public function index()
	    {
		if($this->M_login->logged_id())
		{

	    $data['data'] = $this->M_adm->tampil_data();
	    
		$this->load->view('template/sidebar');
		$this->load->view('admin/index', $data);
		$this->load->view('template/footer');

		}else{

			$this->session->set_flashdata('notif','<div class="alert alert-warning">Maaf! Silahkan Login Dahulu</div>');
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("C_login");

		}
    	}
	 
	    public function tambah()
		{	
			$this->load->view('template/sidebar');
			$this->load->view('admin/tambah');
			$this->load->view('template/footer');
		}

		function tambah_aksi()
			{ //validasi
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');

		if ( $this->form_validation->run() === FALSE ) {
			$this->load->view('template/sidebar');
			$this->load->view('admin/tambah');
			$this->load->view('template/footer');
		}else{
//input tb
			$data = [
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' =>md5($this->input->post('password')),
				'nama' => $this->input->post('nama')
			];
				
			$insert = $this->M_adm->input_data($data);
			

			if ($insert) {
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Admin berhasil ditambah</div>');
				redirect('C_admin/index');
			} else {
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Terjadi Kesalahan saat regisrasi</div>');
				redirect('C_admin/index');
			}

		}
	}
	

		function hapus($id_admin){
			$where = array('id_admin' => $id_admin);
			$this->M_adm->hapus_data($id_admin,'dataa');
			redirect('C_admin/index');
			}

		function edit($id_admin){
			$where = array('id_admin' => $id_admin);
			$data['dataa'] = $this->M_adm->edit_data($where,'tb_admin')->result();
			$this->load->view('admin/edit',$data);
			}

		function update(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
	 
		 
			$data = array(
				'username' => $username,
				'password' => $password,
				'nama' => $nama,
				'email' => $email
			);
				 $where = array(
				'id_admin' => $id_admin
			);
		 
			$this->M_adm->update_data($id_admin,$data);
			redirect('C_admin/index');
		}
}


	
	
	