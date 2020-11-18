<?php

class M_member extends CI_Model{

	public function get_member()
    {
        $query = $this->db->get('tb_member');
		return $query;
    }

 
	public function input_data($data){
		return $this->db->insert('tb_member',$data);

	}

	public function hapus_data($id_member){
		$this->db->where('id_member',$id_member);
		$this->db->delete('tb_member');
	}

	public function update_data($id_member,$data){
		$this->db->where('id_member', $id_member);
		$this->db->update('tb_member', $data);
	}	

	public function tampil_detail($id_member){		
		//$query = $this->db->get_where('tb_member', array('id_member' => $id_member));
		// return $query;
		//$param = array ('id_member' => $id_member);
		return $this->db->get_where('tb_member',$id_member);
	}

	function total_rows() {
    return $this->db->get('tb_member')->num_rows();
	}

	public function getMemberById($id_member)
	{
		return $this->db->get_where('tb_member', ['id_member' => $id_member])->row_array();
	}

	public function ubahDataMember()
	{
		$data = [
		"nama" => $this->input->post('nama', true),
        "username" => $this->input->post('username', true),
        "email" => $this->input->post('email', true),
        "role" => $this->input->post('role', true)

		];
		
		$this->db->where('id_member', $this->input->post('id_member'));
		$this->db->update('tb_member', $data);
	}

	public function hitungJumlah($id_member)
    { 

        $this->db->select (count('*'));
        $this->db->from('tb_project');
        $this->db->join('tb_member', 'tb_member.id_member=tb_project.id_member');
        $query = $this->db->get_where('id_member = 73');
        
        
        
        
        if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return $query->row_array();
    }

    }
    
     public function getAllmembercetak ()
	{
	return $query = $this->db->get('tb_member')->result_array();
	}
	
}