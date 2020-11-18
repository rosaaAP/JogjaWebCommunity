<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function register($data)
	{
		return $this->db->insert('tb_member',$data);
	}

	public function foto_profil($data)
	{
	  $this->load->db();
	  $this->db->insert('tb_member',$data);			
	}

	public function tampil_akun(){
		return $this->db->get('tb_member');
	}

	public function edit_akun($id_member){		
		return $this->db->get_where('tb_member',$id_member);
	}

	public function update_data($id_member,$data){
		$this->db->where('id_member', $id_member);
		$this->db->update('tb_member', $data);
	}	
}


     