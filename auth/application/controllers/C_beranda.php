<?php

class C_beranda Extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

	public function index()
	{   
	     if($this->M_login->logged_id())
		{
	
		$data['dt1']= $this->M_beranda->hitungJumlahAnggota();
		$data['dt2']= $this->M_beranda->hitungJumlahPmbhsn();
		$data['dt3']= $this->M_beranda->hitungJumlahPrj();
		$data['dt4']= $this->M_beranda->hitungJumlahDsks();
		$this->load->view('template/sidebar');
		$this->load->view('beranda/index', $data);
		$this->load->view('template/footer');
		
		}else{
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Maaf! Silahkan Login Dahulu</div>');
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("C_login");

		}
	
	}
	
}