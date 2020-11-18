
<?php 
class C_project extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_project');
		$this->load->library('upload');
	} 

	public function index(){
		
       if($this->M_login->logged_id()) 
		{

		$data['kategori']= $this->M_project->getAllProject();
		$this->load->view('template/sidebar');
		$this->load->view('project/index', $data);
		$this->load->view('template/footer');
		
		}else{

			$this->session->set_flashdata('notif','<div class="alert alert-warning">Maaf! Silahkan Login Dahulu</div>');
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("C_login");

		}
	}


	public function buttontambah(){
		$this->load->view('template/sidebar');
		$this->load->view('project/tambah');
		$this->load->view('template/footer');
	}

	public function save_project(){
		$config['upload_path'] = './gbr_project/'; //path folder
	    $config['allowed_types'] = 'jpg|png|jpeg|'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){

	        if ($this->upload->do_upload('filefoto')){
	            $gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./gbr_project/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '50%';
	            $config['width']= 500;
	            $config['height']= 500;
	            $config['new_image']= './gbr_project/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
	            
				$gambar=$gbr['file_name'];
				$nama=$this->input->post('xnama');
				$now=$this->input->post('waktu_upload');
				$desc_project=$this->input->post('desc_project');
				$nama_file=$this->input->post('nama_file');
				$member=$this->input->post('id_member');
				$this->M_project->simpan_project($nama,$gambar,$now,$desc_project,$nama_file,$member);
				redirect('C_project/index');
				
			}
	                 
	    }else{
			echo "Image yang diupload kosong";
		}

	}

	public function tampil_desc($id_project){
		$data['tmpl']= $this->M_project->getProjectById($id_project);
		$this->load->view('template/sidebar');
		$this->load->view('project/tampil_desc',$data);
		$this->load->view('template/footer');
	}

	public function hapus($id_project){
			$where = array('id_project' => $id_project);
			$this->M_project->hapus_data($id_project,'dataa');
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Data project berhasil dihapus!</div>'); // Buat session flashdata
			redirect('C_project');
			}

	public function ubah($id_project){
			$data['dataa']= $this->M_project->getProjectById($id_project);
			$this->form_validation->set_rules('judul_project', 'Judul project', 'required');
			$this->form_validation->set_rules('desc_project', 'Desc project', 'required');
			if ($this->form_validation->run() == FALSE){
			$this->load->view('project/ubah', $data);
				} else {
			$this->m_project->edit_data();
			redirect('C_project');
				}
			}
	 
		function update(){
			$judul_project = $this->input->post('judul_project');
			$desc_project  = $this->input->post('desc_project');
			
			$data = array(
				'judul_project' => $judul_project,
				'desc_project'  => $desc_project
				
			);
				 $where = array(
				'id_project' => $id_project
			);
		 
			$this->M_project->update_data($id_project,$data);
			redirect('C_project/index');
		}

}