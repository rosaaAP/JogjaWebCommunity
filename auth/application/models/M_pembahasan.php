<?php

class M_pembahasan extends CI_Model{

	function simpan_pmbhsn($judul,$gambar,$desc_pmbhsn,$materi){
		$hasil=$this->db->query("INSERT INTO tb_pembahasan(judul_pmbhsn,gambar,desc_pmbhsn,id_materi) VALUES ('$judul','$gambar','$desc_pmbhsn','$materi')");
		return $hasil;
	}

		public function getAllPmbhsn ()
	{
		$this->db->select('*');
        $this->db->from('tb_pembahasan');
        $this->db->join('tb_materi', 'tb_materi.id_materi=tb_pembahasan.id_materi');
        $this->db->join('tb_member', 'tb_member.id_member=tb_pembahasan.id_member');
        $this->db->order_by('tb_pembahasan.id_pembahasan', 'desc');
        $query = $this->db->get_where();
        return $query->result_array();
	}

	public function getPmbhsnById($id_pembahasan)
	{
		return $this->db->get_where('tb_pembahasan', ['id_pembahasan' => $id_pembahasan])->row_array();
	}

	public function hapus_data($id_pembahasan){
		$this->db->where('id_pembahasan',$id_pembahasan);
		$this->db->delete('tb_pembahasan');
	}

	public function edit_data()
	{
		$data = [
		//"id_materi" => $this->input->post('id_materi', true),
		"judul_pmbhsn" => $this->input->post('judul_pmbhsn', true),
		"desc_pmbhsn" => $this->input->post('desc_pmbhsn', true)
		];
		
		$this->db->where('id_pembahasan', $this->input->post('id_pembahasan'));
		$this->db->update('tb_pembahasan', $data);
	}

	public function update_data($id_pembahasan,$data){
		$this->db->where('id_pembahasan', $id_pembahasan);
		$this->db->update('tb_pembahasan', $data);
	}	

	public function kategori_mtr ()
	{
		$this->db->select('*');
        $this->db->from('tb_materi');
        $query = $this->db->get_where();
        return $query->result_array();
	}
}
