<?php

class C_diskusi Extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
			$this->load->library('pagination');
			$this->load->library('form_validation');
			$this->load->helper('url');
			$this->load->model('M_diskusi');

	}

	public function index()
	{
        if($this->M_login->logged_id())
		{

        $data['dt'] = $this->M_diskusi->getAllDiskusi();           
       // $data['jmlKomen']= $this->M_diskusi->hitungJumlahK($id_diskusi); // menghitung jumlah komentar 
		$dataa['varData']= $this->M_user->tampil_data(); //user login
		$this->load->view('templates/upheader');
		$this->load->view('templates/header',$dataa);
		$this->load->view('diskusi/index',$data);
		$this->load->view('templates/footer');

		}else{
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Maaf! Silahkan Login Dahulu</div>');
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("C_login");

		}
	}

	public function tambah()
	{
		$data['varData']= $this->M_user->tampil_data(); //user login
		$tbl['mtr']= $this->M_diskusi->kategori_mtr();
		$this->load->view('templates/upheader');
		$this->load->view('templates/header',$data);
		$this->load->view('diskusi/tambah',$tbl);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi() //diskusi
		{	
			$data['varData']= $this->M_user->tampil_data(); //user login
			$tbl['mtr']= $this->M_diskusi->kategori_mtr();
			$this->form_validation->set_rules('id_materi', 'Materi', 'required');
			$this->form_validation->set_rules('isi', 'Isi', 'required|min_length[5]');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/upheader');
				$this->load->view('templates/header',$data);
				$this->load->view('diskusi/tambah',$tbl);
				$this->load->view('templates/footer');
			}else{
			$dataa = [
				'topik' => $this->input->post('topik'),
				'isi' => $this->input->post('isi'),
				'tgl_post' => $this->input->post('tgl_post'),
				'id_materi' => $this->input->post('id_materi'),
				'id_member' => $this->input->post('id_member')
			];
				
			$insert = $this->M_diskusi->input_diskusi($dataa);

			if ($insert) {
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Diskusi berhasil ditambah</div>');
				redirect("C_diskusi");
			} else {
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Terjadi Kesalahan </div>');
				redirect("C_diskusi/tambah");
			}
		}
	}

    function tampil($id_diskusi)
	{
		$data['varData']= $this->M_user->tampil_data(); // pelogin <si komentar>
		$dta['dt']= $this->M_diskusi->getDiskusiByID($id_diskusi); // si pembuat diskusi
		$dta['komen']= $this->M_diskusi->tampil_komentar($id_diskusi); // menampilkan isi komentar
		$this->load->view('templates/upheader');
		$this->load->view('templates/header',$data);
		$this->load->view('diskusi/tampil',$dta);
		$this->load->view('templates/footer');
	}

	public function tambah_komentar()
		{   
		    $datang_dari = $this->input->server('HTTP_REFERER'); // Tambahkan variabel ini untuk redirect refresh komentar
            $dataa = array(
                'id_diskusi' => $this->input->post('id_diskusi'),
				'komentar' => $this->input->post('komentar'),
				'tgl_komen' => $this->input->post('tgl_komen'),
				'id_member' => $this->input->post('id_member')
            );
            $insert = $this->M_diskusi->input_komentar($dataa);
            
            $this->session->set_flashdata('notif','<div class="alert alert-warning">Komentar telah terkirim! </div>');
            redirect($datang_dari); // panggil variavel tersebut untuk redirect
		}
		
		function tampil_komen($id_diskusi)
	{
		$data['varData']= $this->M_user->tampil_data(); // pelogin <si komentar>
		$dta['dt']= $this->M_diskusi->getDiskusiByID($id_diskusi); // si pembuat diskusi
		$dta['komen']= $this->M_diskusi->tampil_komentar($id_diskusi); // menampilkan isi komentar
		$this->load->view('templates/upheader');
		$this->load->view('templates/header',$data);
		$this->load->view('diskusi/komentar',$dta);
		$this->load->view('templates/footer');
	}
		
    
	  // public function hitungJumlahK($id_diskusi)
//    { 

  //      $this->db->select (count('*'));
        //$this->db->from('tb_komentar');
       //$this->db->where('id_diskusi = 16');
        
    //    $query=$this->db->get('tb_komentar', ['id_diskusi' => $id_diskusi]);
        //$query=$this->db->get_where();
        
      //  if($query->num_rows()>0)
    //{
      //return $query->num_rows();
//    }
  //  else
    //{
      //return $query->row_array();
  //  }

//    }

}