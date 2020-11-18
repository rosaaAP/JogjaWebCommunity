<?php

class C_home Extends CI_Controller{

	public function index()
	{
		if($this->M_login->logged_id())
		{

		$data['varArtikel']= $this->M_home->getArtikel();
		$this->load->view('template/sidebar');
		$this->load->view('home/index', $data);
		$this->load->view('template/footer');

		}else{

			$this->session->set_flashdata('notif','<div class="alert alert-warning">Maaf! Silahkan Login Dahulu</div>');
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("C_login");

		}
	}

	public function ubah($id_home)
	{
		$data['varArtikelid']= $this->M_home->getID($id_home);
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('template/sidebar');
			$this->load->view('home/ubah', $data);
			$this->load->view('template/footer');
		} else {

			$this->M_home->ubahData();
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Data Artikel berhasil diubah</div>');
			redirect('C_home');
		}
	}
	
}



	 
		
		