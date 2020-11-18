<?php

class C_materi Extends CI_Controller{
 
		function __construct(){
			parent::__construct();		
			$this->load->model('M_materi');
			$this->load->helper('url');
	 
			}

	public function index()
	{
		if($this->M_login->logged_id())
		{

		$data['kategori']= $this->M_materi->getAllMateri();
		$this->load->view('template/sidebar');
		$this->load->view('materi/index', $data);
		$this->load->view('template/footer');

		}else{

			$this->session->set_flashdata('notif','<div class="alert alert-warning">Maaf! Silahkan Login Dahulu</div>');
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("C_login");

		}
	}

	public function ubah($id_materi)
	{
		$data['varData']= $this->M_materi->tampil_data();
		$data['kategori']= $this->M_materi->getMateriByID($id_materi);
		$this->form_validation->set_rules('nama_materi', 'Nama Materi', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('template/sidebar');
			$this->load->view('materi/ubah', $data);
			$this->load->view('template/footer');
		} else {

			$this->M_materi->ubahDataMateri();
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Data materi berhasil diubah!</div>'); // Buat session flashdata
			redirect('C_materi');
		}
	}
	 
	function buttontambah()
	{
		$data['varData']= $this->M_materi->tampil_data();
		$this->load->view('template/sidebar');
		$this->load->view('materi/tambah',$data);
		$this->load->view('template/footer');
	}

		function tambah_aksi(){
			$nama_materi = $this->input->post('nama_materi');
			
			$data = array(
				'nama_materi' => $nama_materi
				);
			$this->M_materi->tambahDataMateri($data,'tb_materi');
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Data materi berhasil ditambah!</div>'); // Buat session flashdata
			redirect('C_materi');
			}

		function hapus($id_materi){
			$where = array('id_materi' => $id_materi);
			$this->M_materi->hapus_data($id_materi,'dataa');
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Data materi berhasil dihapus!</div>'); // Buat session flashdata
			redirect('C_materi');
			}

}


	
	
	