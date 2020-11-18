<?php

class C_materi extends CI_Controller{


	public function index()
	{	
		if($this->M_login->logged_id())
		{

		$data['varData']= $this->M_user->tampil_data();
	    $dt['varmateri']= $this->M_materi->getMateriByID($id_materi);
		$this->load->view('templates/upheader');
		$this->load->view('templates/header', $data);
		$this->load->view('materi/index', $dt);
		$this->load->view('templates/footer');

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("C_login");

		}
	}
	
	public function data($id_materi)
	{	

		$data['varData']= $this->M_user->tampil_data();
	    $dt['varmateri']= $this->M_materi->getMateriByID($id_materi);
		$this->load->view('templates/upheader');
		$this->load->view('templates/header', $data);
		$this->load->view('materi/data', $dt);
		$this->load->view('templates/footer');
	}
	
	public function cari() 
	{
		$data['varData']= $this->M_user->tampil_data();
	    $dt['varmateri']= $this->M_materi->getMateriByID($id_materi);
		$this->load->view('templates/upheader');
		$this->load->view('templates/header', $data);
		$this->load->view('materi/data', $dt);
		$this->load->view('templates/footer');
	}
 
	public function hasil()
	{
		
		$data['varData']= $this->M_user->tampil_data();
	    //$dt['varmateri']= $this->M_materi->getMateriByID($id_materi);
	    $dt['varcari'] = $this->M_materi->caripmbhsn();
		$this->load->view('templates/upheader');
		$this->load->view('templates/header', $data);
		$this->load->view('materi/result', $dt);
		$this->load->view('templates/footer');
	}


}

