<?php

class C_diskusi Extends CI_Controller{
	
	public function index()
	{	
		if($this->M_login->logged_id())
		{

		//$data['dt1']= $this->M_diskusi->hitungJumlahKomen($id_komentar);
		$data['dt']= $this->M_diskusi->getAllDiskusi();
		$this->load->view('template/sidebar');
		$this->load->view('diskusi/index',$data);
		$this->load->view('template/footer');

		}else{

			$this->session->set_flashdata('notif','<div class="alert alert-warning">Maaf! Silahkan Login Dahulu</div>');
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("C_login");

		}
	}

	public function tampil($id_diskusi)
	{
		$data['varDiskusi']= $this->M_diskusi->getDiskusiByID($id_diskusi); // si pembuat diskusi
		$data['komen']= $this->M_diskusi->tampil_komentar($id_diskusi);
		//$data['varBuat']= $this->M_diskusi->getMemberByID($id_member); // menampilkan isi komentar
		$this->load->view('template/sidebar');
		$this->load->view('diskusi/tampil',$data);
		//$this->load->view('template/footer');
	}

	public function hapus($id_diskusi){
			$where = array('id_diskusi' => $id_diskusi);
			$this->M_diskusi->hapus_diskusi($id_diskusi,'dataa');
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Data diskusi berhasil dihapus!</div>');
			redirect('C_diskusi');
			}

	function hapuskomentar($id_komentar){
	         $datang_dari = $this->input->server('HTTP_REFERER'); // Tambahkan variabel ini untuk redirect refresh komentar
	        
			$where = array('id_komentar' => $id_komentar);
			$this->M_diskusi->hapus_komen($id_komentar,'dataa');
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Komentar telah dihapus!</div>');
			 redirect($datang_dari); // panggil variavel tersebut untuk redirect
			}

	public function hasil()
	{
		
	    $dt['varcari'] = $this->M_diskusi->carikomentar();
		$this->load->view('template/sidebar');
		$this->load->view('diskusi/result', $dt);
		$this->load->view('template/footer');
	}
}