<?php

class M_materi extends CI_Model{

	public function getMateriByID($id_materi)
	{
        	$this->db->select('*');
                $this->db->from('tb_pembahasan');
                $this->db->join('tb_materi', 'tb_materi.id_materi=tb_pembahasan.id_materi');
                $this->db->join('tb_member', 'tb_member.id_member=tb_pembahasan.id_member');
                $this->db->where('tb_pembahasan.id_materi', $id_materi);
                $this->db->order_by('tb_materi.id_materi', 'desc');
                $query = $this->db->get_where();
                return $query->result_array();
	}        

        public function getPmbhsnByID($id_pembahasan)
        {
                return $this->db->get_where('tb_pembahasan', ['id_pembahasan' => $id_pembahasan])->row_array();
        }
        
         public function caripmbhsn()
        {
         $cari = $this->input->GET('cari', TRUE);
         $data = $this->db->query("SELECT *
                                        FROM tb_pembahasan
                                        JOIN tb_materi ON tb_materi.id_materi = tb_pembahasan.id_materi
                                        WHERE tb_pembahasan.judul_pmbhsn LIKE '%$cari%' ");
         return $data->result();
        }

}
