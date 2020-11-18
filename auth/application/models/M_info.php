<?php

class M_info extends CI_Model{

	public function getInfo ()
	{
	return $query = $this->db->get('tb_info')->result_array();
	} 

	public function getID($id_info)
	{
		return $this->db->get_where('tb_info', ['id_info' => $id_info])->row_array();
	}

	public function ubahData()
	{	
		date_default_timezone_set('Asia/Jakarta');
     	$now = date('Y-m-d');
		$data = [
		"judul" => $this->input->post('judul', true),
		"waktu" => $now,
		"isi" => $this->input->post('isi', true)
		];
	
		$this->db->where('id_info', $this->input->post('id_info'));
		$this->db->update('tb_info', $data);
	}
}

