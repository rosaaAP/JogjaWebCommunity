<?php

class M_data extends CI_Model{

	public function tampil_data(){
		return $this->db->get('tb_member');
	}
 
	public function input_data($data){
		return $this->db->insert('tb_member',$data);

	}

	public function hapus_data($id_member){
		$this->db->where('id_member',$id_member);
		$this->db->delete('tb_member');
	}

	public function edit_data($id_member){		
		//$query = $this->db->get_where('tb_member', array('id_member' => $id_member));
		// return $query;
		//$param = array ('id_member' => $id_member);
		return $this->db->get_where('tb_member',$id_member);
	}

	public function update_data($id_member,$data){
		$this->db->where('id_member', $id_member);
		$this->db->update('tb_member', $data);
	}	
}
