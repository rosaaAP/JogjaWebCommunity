<?php

class C_pembahasan extends CI_Controller{
 
	public function tambah()
	{	
		$data['varData']= $this->M_user->tampil_data();
		$tbl['mtr']= $this->M_pembahasan->kategori_mtr();
		$this->load->view('templates/upheader');
		$this->load->view('templates/header',$data);
		$this->load->view('pembahasan/tambah',$tbl);
		$this->load->view('templates/footer');	
	}

	function save_pmbhsn(){
		$config['upload_path'] = './auth/gbr_pmbhsn/'; //path folder
	    $config['allowed_types'] = 'jpg|png|jpeg|'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){

	        if ($this->upload->do_upload('filefoto')){
	            $gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./auth/gbr_pmbhsn/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '50%';
	            $config['width']= 500;
	            $config['height']= 500;
	            $config['new_image']= './auth/gbr_pmbhsn/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
				$judul=$this->input->post('xjudul');
				$desc_pmbhsn=$this->input->post('desc_pmbhsn');
				$materi=$this->input->post('id_materi');
				$member=$this->input->post('id_member');
				$this->M_pembahasan->simpan_pmbhsn($judul,$gambar,$desc_pmbhsn,$materi,$member);
				$this->session->set_flashdata('notif','<div class="alert alert-warning">Pembahasan berhasil ditambahkan</div>'); // Buat session flashdata
				redirect('C_pembahasan/tambah');
				
			}
	                 
	    }else{
	    	$this->session->set_flashdata('notif','<div class="alert alert-warning">Gambar yang diupload kosong</div>'); // Buat session flashdata
	            	redirect('C_pembahasan/tambah');
		}

	}
	
	public function detail($id_pembahasan)
	{	
		$data['varData']= $this->M_user->tampil_data();
	    $dt['varpmbhsn']= $this->M_pembahasan->getPmbhsnByID($id_pembahasan);
		$this->load->view('templates/upheader');
		$this->load->view('templates/header', $data);
		$this->load->view('materi/detailpmbhsn', $dt);
		$this->load->view('templates/footer');
	}

}

