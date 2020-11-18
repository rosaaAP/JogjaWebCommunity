<?php

class M_pembahasan extends CI_Model{

        function simpan_pmbhsn($judul,$gambar,$desc_pmbhsn,$materi,$member)
        {
                $hasil=$this->db->query("INSERT INTO tb_pembahasan(judul_pmbhsn,gambar,desc_pmbhsn,id_materi,id_member) VALUES ('$judul','$gambar','$desc_pmbhsn','$materi','$member')");
                return $hasil;
        }


	public function kategori_mtr ()
        {
                $this->db->select('*');
                $this->db->from('tb_materi');
                $query = $this->db->get_where();
                return $query->result_array();
        }
        
    public function getPmbhsnByID($id_pembahasan)
        {
                return $this->db->get_where('tb_pembahasan', ['id_pembahasan' => $id_pembahasan])->row_array();
        }

}
