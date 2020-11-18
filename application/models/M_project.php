<?php
class M_project extends CI_Model{

    function simpan_project($nama,$gambar,$now,$desc_project,$nama_file,$member)
    {
		date_default_timezone_set('Asia/Jakarta');
     	$now = date('Y-m-d H:i:s');
 		$hasil=$this->db->query("INSERT INTO tb_project(nama_project,gambar,waktu_upload,desc_project,nama_file,id_member) VALUES ('$nama','$gambar','$now','$desc_project','$nama_file','$member')");
		return $hasil;
	}

	//pagination
	function get_project()
    {
        $query = $this->db->get('tb_project');
        return $query;
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

	public function hapus_data($id_project){
		$this->db->where('id_project',$id_project);
		$this->db->delete('tb_project');
	}	
	
	public function getProjectById($id_project)
	{
		return $this->db->get_where('tb_project', ['id_project' => $id_project])->row_array();
	}

	
}
