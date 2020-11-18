<?php

class C_beranda Extends CI_Controller{

	public function index()
	{
		if($this->M_login->logged_id())
		{

		$data['varData']= $this->M_user->tampil_data();
		$dataa['dt1']= $this->M_beranda->hitungJumlahAnggota();
		$dataa['dt2']= $this->M_beranda->hitungJumlahPmbhsn();
		$dataa['dt3']= $this->M_beranda->hitungJumlahDsks();
		$dataa['dt4']= $this->M_beranda->hitungJumlahPrj();
		$dataa['varInfo']= $this->M_beranda->getInfo();
		$this->load->view('templates/upheader');
		$this->load->view('templates/header',$data);
		$this->load->view('beranda/index',$dataa);
		$this->load->view('templates/footer');		

		}else{

			$this->session->set_flashdata('notif','<div class="alert alert-warning">Maaf! Silahkan Login Dahulu</div>');
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("C_login");

		}
	}


}