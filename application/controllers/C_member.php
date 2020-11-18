<?php

class C_member extends CI_Controller {

	public function index()
	{

		if($this->M_login->logged_id())
		{
		
		$data['varData']= $this->M_user->tampil_data();
		//tanpa result bisa nampilin per profil tapi foto gak muncul
		$dataa['dataa'] = $this->M_user->tampil_dataAll()->result();
		$this->load->view('templates/upheader');
		$this->load->view('templates/header',$data);
		//$this->load->view('v_input',$data);
		$this->load->view('member/index',$dataa );
		$this->load->view('templates/footer'); 

		}else{
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Maaf! Silahkan Login Dahulu</div>');
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("C_login");

		}

	}

	public function profil_member($id_member)
	{	
		$title['title'] = "Halaman member";
		$data['varData']= $this->M_user->tampil_data();
		$dataaa['dataaa'] = $this->M_user->getMemberByID($id_member);
		$this->load->view('templates/upheader',$title);
		$this->load->view('templates/header',$data, $title);
		$this->load->view('member/profil_member', $dataaa);
		$this->load->view('templates/footer',$title); 
	}
	

}


