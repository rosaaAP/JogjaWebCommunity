<?php
class C_utama extends CI_Controller {

public function index(){

		$data['dt1']= $this->M_utama->hitungJumlahAnggota();		//hitung jumlah anggota
		$data['varArtikel']= $this->M_utama->getArtikel();			// menampilkan data artikel
		$this->load->view('utama/head');							
		$this->load->view('utama/home',$data);
		$this->load->view('utama/footer');
	}
}
