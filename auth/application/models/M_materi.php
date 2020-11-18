<?php

class M_materi extends CI_Model{


	public function tampil_data()
	{
		$this->db->select('*');
        $this->db->from('tb_admin');
        $username = $this->session->userdata('username');
        $this->db->where('username', $username);
		$query = $this->db->get_where();
		return $query->row_array();
    }

	public function getAllMateri ()
	{
		$this->db->select('*');
        $this->db->from('tb_materi');
        $this->db->join('tb_admin', 'tb_admin.id_admin=tb_materi.id_admin');
        $query = $this->db->get_where();
        return $query;
	}

	public function getMateriById($id_materi)
	{
		return $this->db->get_where('tb_materi', ['id_materi' => $id_materi])->row_array();
	}

	public function ubahDataMateri()
	{
		$data = [
		"nama_materi" => $this->input->post('nama_materi', true),
		"id_admin" => $this->input->post('id_admin', true)
		];
		
		$this->db->where('id_materi', $this->input->post('id_materi'));
		$this->db->update('tb_materi', $data);
	}

	
	public function tambahDataMateri()
	{
		$data = array(
		"nama_materi" => $this->input->post('nama_materi', true),
		"id_admin" => $this->input->post('id_admin', true)
);
		$this->db->insert('tb_materi', $data);
	}

	public function hapus_data($id_materi){
		$this->db->where('id_materi',$id_materi);
		$this->db->delete('tb_materi');
	}	
}
