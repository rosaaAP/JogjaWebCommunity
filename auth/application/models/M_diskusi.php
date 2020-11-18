<?php
class M_diskusi extends CI_Model{

    
    public function getAllDiskusi ()
    {
        $this->db->select('*');
        $this->db->from('tb_diskusi');
        $this->db->join('tb_materi', 'tb_materi.id_materi=tb_diskusi.id_materi');
        $this->db->join('tb_member', 'tb_member.id_member=tb_diskusi.id_member');
       $this->db->order_by('tb_diskusi.tgl_post', 'desc');
        $query = $this->db->get_where();
        return $query->result_array();
    }

    public function kategori_mtr ()
    {
        $this->db->select('*');
        $this->db->from('tb_materi');
        $query = $this->db->get_where();
        return $query->result_array();
    }

     public function input_diskusi($dataa)
    { 
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d / H:i:s');
        $dataa = array(
            "topik" => $this->input->post('topik', true),
            "isi" => $this->input->post('isi', true),
            "id_member" => $this->input->post('id_member', true),
            "tgl_post" => $now,
            "id_materi" => $this->input->post('id_materi', true)
        );
         return $this->db->insert('tb_diskusi',$dataa);
    }

    public function getDiskusiByID($id_diskusi)
    {
        return $this->db->get_where('tb_diskusi', ['id_diskusi' => $id_diskusi])->row_array();
    }

    public function getMemberByID($id_member)
    {
        $this->db->select('*');
        $this->db->from('tb_diskusi');
        $this->db->join('tb_member', 'tb_member.id_member=tb_diskusi.id_member');
        $this->db->where('tb_diskusi.id_member', $id_member);
        $query = $this->db->get_where();
        return $query->result_array();
    }

     public function tampil_komentar($id_diskusi)          //menampilkan isi komentar perdiskusi
    {
                $this->db->select('*');
                $this->db->from('tb_komentar');
                $this->db->join('tb_member', 'tb_member.id_member=tb_komentar.id_member');
                $this->db->where('tb_komentar.id_diskusi', $id_diskusi);
                $this->db->order_by('tb_member.id_member', 'desc');
                $query = $this->db->get_where();
                return $query->result_array();
    }

    public function hapus_diskusi($id_diskusi){
        $this->db->where('id_diskusi',$id_diskusi);
        $this->db->delete('tb_diskusi');
    }

     public function hapus_komen($id_komentar){
        $this->db->where('id_komentar',$id_komentar);
        $this->db->delete('tb_komentar');
    }

    public function carikomentar()
        {
         $cari = $this->input->GET('cari', TRUE);
         $data = $this->db->query("SELECT *
                                        FROM tb_komentar
                                        JOIN tb_member ON tb_member.id_member = tb_komentar.id_member
                                        WHERE tb_komentar.komentar LIKE '%$cari%' ");
         return $data->result();
        }
}


    //public function hitungJumlahKomen($id_komentar)
    //{   
  //  $query = $this->db->get('tb_komentar', ['id_komentar' => $id_komentar]);
    //if($query->num_rows()>0)
    //{
      //return $query->num_rows();
    //}
   // else
   // {
     // return 0;
    //}
      //  }


