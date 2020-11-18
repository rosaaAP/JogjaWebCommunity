<?php

class M_beranda extends CI_Model{

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

  public function hitungJumlahPmbhsn()
  {   
    $query = $this->db->get('tb_pembahasan');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
    }

  public function hitungJumlahPrj()
  {   
    $query = $this->db->get('tb_project');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
    }

  public function hitungJumlahDsks()
  {   
    $query = $this->db->get('tb_diskusi');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
    }

  

}
