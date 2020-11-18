
<?php 
class C_project extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
			$this->load->helper('url');	
			$this->load->model('M_project');
	}
	
	public function index()
	{
	   if($this->M_login->logged_id())
		{

        $data['data'] = $this->M_project->get_project();           
        
        //load view mahasiswa view
		$tbl['varData']= $this->M_user->tampil_data();
		$data['dt']= $this->M_project->getAllProject();		
		$this->load->view('templates/upheader');
		$this->load->view('templates/header',$tbl);
		$this->load->view('project/index',$data);
		$this->load->view('templates/footer');

		}else{
			$this->session->set_flashdata('notif','<div class="alert alert-warning">Maaf! Silahkan Login Dahulu</div>');
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("C_login");

		}
	}

	function btn_tambah(){
		$title['title'] = "Halaman tambah project";
		$data['varData']= $this->M_user->tampil_data();
		$this->load->view('templates/upheader',$title);
		$this->load->view('templates/header',$data);
		$this->load->view('project/tambah');
		$this->load->view('templates/footer');
	}

	function projectku($id_project){
		$data['varData']= $this->M_user->tampil_data();
		$prj['dtprj']= $this->M_project->getProjectById($id_project);
		$this->load->view('templates/upheader');
		$this->load->view('templates/header',$data);
		$this->load->view('project/projectku',$prj);
		$this->load->view('templates/footer');
	}

	function save_project(){
		$config['upload_path'] = './auth/gbr_project/'; //path folder
	    $config['allowed_types'] = 'jpg|png|jpeg|'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){

	       if ($this->upload->do_upload('filefoto')){
	            $gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./auth/gbr_project/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '50%';
	           	$config['max_size']             = '0';
		        $config['max_width']            = '0';
		        $config['max_height']           = '0';
	            $config['new_image']= './auth/gbr_project/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
				$nama=$this->input->post('xnama');
				$now=$this->input->post('waktu_upload');
				$desc_project=$this->input->post('desc_project');
				$nama_file=$this->input->post('nama_file');
				$member=$this->input->post('id_member');
				$this->M_project->simpan_project($nama,$gambar,$now,$desc_project,$nama_file,$member);
				redirect("C_project");
				
			}
	                 
	    }else{
			echo "Image yang diupload kosong";
		}

	}

	function tampil_desc($id_project){
		$data['tmpl']= $this->M_project->getProjectById($id_project);
		$data['varData']= $this->M_user->tampil_data();
		$this->load->view('templates/upheader');
		$this->load->view('templates/header',$data);
		$this->load->view('project/tampil_desc',$data);
		$this->load->view('templates/footer');
	}
		
		
	function hapus($id_project){
			$where = array('id_project' => $id_project);
			$this->M_project->hapus_data($id_project,'dataa');
			redirect('C_project/index');
			}

	function ubah($id_project){
			$data['dataa']= $this->M_project->getProjectById($id_project);
			$this->form_validation->set_rules('judul_project', 'Judul project', 'required');
			$this->form_validation->set_rules('desC_project', 'Desc project', 'required');
			if ($this->form_validation->run() == FALSE){
			$this->load->view('project/ubah', $data);
				} else {
			$this->m_project->edit_data();
			redirect('C_project');
				}
			}
	 
		function update(){
			$judul_project = $this->input->post('judul_project');
			$desC_project  = $this->input->post('desC_project');
			
			$data = array(
				'judul_project' => $judul_project,
				'desC_project'  => $desC_project
				
			);
				 $where = array(
				'id_project' => $id_project
			);
		 
			$this->M_project->update_data($id_project,$data);
			redirect('C_project/index');
		}
}