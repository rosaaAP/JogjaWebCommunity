<?php

class Crud Extends CI_Controller{
 
		function __construct(){
			parent::__construct();		
			$this->load->model('M_data');
			$this->load->helper('url');
	 
			}
	 
		function index(){
			$data['dataa'] = $this->M_data->tampil_data()->result();
			$this->load->view('v_tampil',$data);
			}
	 
		function tambah(){
			$this->load->view('v_input');
			}
	 
		function tambah_aksi(){
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$tgl_lhr = $this->input->post('tgl_lhr');
			$pekerjaan = $this->input->post('pekerjaan');
			$fotoprofil = $this->input->post('fotoprofil');
	 
			$data = array(
				'nama' => $nama,
				'username' => $username,
				'email' => $email,
				'password' => $password,
				'tgl_lhr' => $tgl_lhr,
				'pekerjaan' => $pekerjaan,
				'fotoprofil' => $fotoprofil
				);
			$this->M_data->input_data($data,'tb_member');
			redirect('Crud/index');
			}

		function hapus($id_member){
			$where = array('id_member' => $id_member);
			$this->M_data->hapus_data($id_member,'dataa');
			redirect('Crud/index');
			}

		function edit($id_member){
			$where = array('id_member' => $id_member);
			$data['dataa'] = $this->M_data->edit_data($where,'tb_member')->result();
			$this->load->view('v_edit',$data);
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
		 
			$this->M_data->update_data($id_member,$data);
			redirect('Crud/index');
		}
}
