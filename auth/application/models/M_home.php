<?php

class M_home extends CI_Model{

	public function getArtikel ()
	{
	return $query = $this->db->get('tb_home')->result_array();
	} 

	public function getID($id_home)
	{
		return $this->db->get_where('tb_home', ['id_home' => $id_home])->row_array();
	}

	public function ubahData()
	{
		$data = [
		"judul" => $this->input->post('judul', true),
		"isi" => $this->input->post('isi', true)
		];
	
		$this->db->where('id_home', $this->input->post('id_home'));
		$this->db->update('tb_home', $data);
	}
}

