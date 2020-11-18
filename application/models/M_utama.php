<?php

class M_utama extends CI_Model{

	public function hitungJumlahAnggota()
	{   
    $query = $this->db->get('tb_member');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
	}

  public function getArtikel ()
  {
  return $query = $this->db->get('tb_home')->result_array();
  } 
  
}
