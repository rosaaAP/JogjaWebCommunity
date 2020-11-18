<?php

class C_info Extends CI_Controller{

	public function index()
	{
		if($this->M_login->logged_id())
		{

		$data['varInfo']= $this->M_info->getInfo();
		$this->load->view('template/sidebar');
		$this->load->view('info/index', $data);
		$this->load->view('template/footer');

		}else{

			$this->session->set_flashdata('notif','<div class="alert alert-warning">Maaf! Silahkan Login Dahulu</div>');
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("C_login");

		}
	}

	public function ubah($id_info)
	{
		$data['varInfoid']= $this->M_info->getID($id_info);
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('template/sidebar');
			$this->load->view('info/ubah', $data);
			$this->load->view('template/footer');
		} else {

			$this->M_info->ubahData();		
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Data Info berhasil diubah</div>');
			redirect('C_info');
		}
	}
	
}



	 
		
		