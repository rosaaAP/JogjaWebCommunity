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
     	$now = date('Y-m-d H:i:s');
     	$dataa = array(
	  	  	"topik" => $this->input->post('topik', true),
	        "isi" => $this->input->post('isi', true),
	        "id_member" => $this->input->post('id_member', true),
       		"tgl_post" => $now,
       		"id_materi" => $this->input->post('id_materi', true)
       	);
    	 return $this->db->insert('tb_diskusi',$dataa);
    }

     public function inputdiskusi($insert)
    {
        $this->db->insert('tb_diskusi', $insert);
    }

 	public function getDiskusiByID($id_diskusi)
	{
        
		return $this->db->get_where('tb_diskusi', ['id_diskusi' => $id_diskusi])->row_array();
	}
	
     public function input_komentar($insert)   //melakukan input komentar
    { 
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');
        $insert = array(
            "id_diskusi" => $this->input->post('id_diskusi', true),
            "komentar" => $this->input->post('komentar', true),
            "tgl_komen" => $now,
            "id_member" => $this->input->post('id_member', true)
        );
         return $this->db->insert('tb_komentar',$insert);
    }

        public function tampil_komentar($id_diskusi)          //menampilkan isi komentar perdiskusi
    {
                $this->db->select('*');
                $this->db->from('tb_komentar');
                $this->db->join('tb_member', 'tb_member.id_member=tb_komentar.id_member');
                $this->db->where('tb_komentar.id_diskusi', $id_diskusi);
                $this->db->order_by('tb_komentar.tgl_komen', 'asdc');
                $query = $this->db->get_where();
                return $query->result_array();
    }

}
