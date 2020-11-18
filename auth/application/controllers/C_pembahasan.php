<?php

class C_pembahasan Extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('M_pembahasan');
		$this->load->library('upload');
	} 

	public function index()
	{
		if($this->M_login->logged_id())
		{

		$data['kategori']= $this->M_pembahasan->getAllPmbhsn();
		$this->load->view('template/sidebar');
		$this->load->view('pembahasan/index',$data);
		$this->load->view('template/footer');
		}else{

			$this->session->set_flashdata('notif','<div class="alert alert-info">Maaf! Silahkan Login Dahulu</div>');
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("C_login");

		}
	}

	public function buttontambah(){
		$tbl['mtr']= $this->M_pembahasan->kategori_mtr();
		$this->load->view('template/sidebar');
		$this->load->view('pembahasan/tambah',$tbl );
		$this->load->view('template/footer');
	}

	public function save_pmbhsn(){
		$config['upload_path'] = './gbr_pmbhsn/'; //path folder
	    $config['allowed_types'] = 'jpg|png|jpeg|'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){

	        if ($this->upload->do_upload('filefoto')){
	            $gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./gbr_pmbhsn/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '50%';
	            $config['width']= 600;
	            $config['height']= 400;
	            $config['new_image']= './gbr_pmbhsn/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
				$judul=$this->input->post('xjudul');
				$desc_pmbhsn=$this->input->post('desc_pmbhsn');
				$materi=$this->input->post('id_materi');
				$this->M_pembahasan->simpan_pmbhsn($judul,$gambar,$desc_pmbhsn,$materi);
				redirect('C_pembahasan');
				
			}
	                 
	    }else{
			echo "Image yang diupload kosong";
		}

	}

		public function hapus($id_pembahasan){
			$where = array('id_pembahasan' => $id_pembahasan);
			$this->M_pembahasan->hapus_data($id_pembahasan,'dataa');
			$this->session->set_flashdata('notif','<div class="alert alert-info">Data berhasil di hapus !</div>');
			redirect('C_pembahasan');
			}

		public function ubah($id_pembahasan){
			$data['dataa']= $this->M_pembahasan->getPmbhsnById($id_pembahasan);
			$this->form_validation->set_rules('judul_pmbhsn', 'Judul Pembahasan', 'required');
			$this->form_validation->set_rules('desc_pmbhsn', 'Desc Pembahasan', 'required');
			//$this->form_validation->set_rules('id_materi', 'id_materi', 'required');
			if ($this->form_validation->run() == FALSE){
			$this->load->view('pembahasan/ubah', $data);
				} else {
			$this->_pembahasan1->edit_data();
			redirect('C_pembahasan');
				}
			}
	 
		function update(){
			$judul_pmbhsn = $this->input->post('judul_pmbhsn');
			$desc_pmbhsn  = $this->input->post('desc_pmbhsn');
			//$id_materi  = $this->input->post('id_materi');
			
			$data = array(
				'judul_pmbhsn' => $judul_pmbhsn,
				'desc_pmbhsn'  => $desc_pmbhsn
				//'id_materi'    => $id_materi
			);
				 $where = array(
				'id_pembahasan' => $id_pembahasan
			);
		 
			$this->M_pembahasan->update_data($id_pembahasan,$data);
			redirect('C_pembahasan/index');
		}

		public function tampil_desc($id_pembahasan){
		$data['kategori']= $this->M_pembahasan->getPmbhsnById($id_pembahasan);
		$this->load->view('template/sidebar');
		$this->load->view('pembahasan/tampil_desc',$data);
		$this->load->view('template/footer');
	}
}



	
	
	