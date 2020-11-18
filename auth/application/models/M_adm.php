<?php

class M_adm extends CI_Model{

    public function tampil_data()
    {
		$query = $this->db->get('tb_admin');
		return $query;
	}
 
  	public function input_data($data){
		$data = array(
	  	  	"nama" => $this->input->post('nama', true),
	        "email" => $this->input->post('email', true),
	        "username" => $this->input->post('username', true),
	        "password" =>  md5($this->input->post('password', true))
   			 );
      	return $this->db->insert('tb_admin',$data);

		}

	public function hapus_data($id_admin){
		$this->db->where('id_admin',$id_admin);
		$this->db->delete('tb_admin');
	}

	public function edit_data($id_admin){		
		//$query = $this->db->get_where('tb_admin', array('id_admin' => $id_admin));
		// return $query;
		//$param = array ('id_admin' => $id_admin);
		return $this->db->get_where('tb_admin',$id_admin);
	}

	public function update_data($id_admin,$data){
		$this->db->where('id_admin', $id_admin);
		$this->db->update('tb_admin', $data);
	}	
}
