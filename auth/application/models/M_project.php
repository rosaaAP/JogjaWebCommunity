<?php
class M_project extends CI_Model{

	function simpan_project($nama,$gambar,$now,$desc_project,$member){
		date_default_timezone_set('Asia/Jakarta');
     	$now = date('Y-m-d / H:i:s a');
 		$hasil=$this->db->query("INSERT INTO tb_project(nama_project,gambar,waktu_upload,desc_project,id_member) VALUES ('$nama','$gambar','$now','$desc_project','$member')");
		return $hasil;
	}


	public function getAllProject ()
	{
		$this->db->select('*');
        $this->db->from('tb_project');
        $this->db->join('tb_member', 'tb_member.id_member=tb_project.id_member');
        $this->db->order_by('tb_project.id_project', 'desc');
        $query = $this->db->get_where();
        return $query->result_array();
	}

	public function getProjectById($id_project)
	{
		return $this->db->get_where('tb_project', ['id_project' => $id_project])->row_array();
	}

	public function hapus_data($id_project){
		$this->db->where('id_project',$id_project);
		$this->db->delete('tb_project');
	}

	public function edit_data()
	{
		$data = [
		
		"judul_project" => $this->input->post('judul_project', true),
		"desc_project" => $this->input->post('desc_project', true)
		];
		
		$this->db->where('id_project', $this->input->post('id_project'));
		$this->db->update('tb_project', $data);
	}

	public function update_data($id_project,$data){
		$this->db->where('id_project', $id_project);
		$this->db->update('tb_project', $data);
	}	


}
