<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

 	public function register($data)
	{
		date_default_timezone_set('Asia/Jakarta');
     	$now = date('Y-m-d');
     	$data = array(
	  	  	"nama" => $this->input->post('nama', true),
	        "email" => $this->input->post('email', true),
	        "username" => $this->input->post('username', true),
	        "password" =>  md5($this->input->post('password', true)),
	        "pekerjaan" => $this->input->post('pekerjaan', true),
	        "tgl_lhr" => $this->input->post('tgl_lhr', true),
       		"tgl_daftar" => $now
   			 );
      	return $this->db->insert('tb_member',$data);
 	}

 	public function getMemberById($id_member)
	{
		return $this->db->get_where('tb_member', ['id_member' => $id_member])->row_array();
	}

	function tampil_data()
	{
		$this->db->select('*');
        $this->db->from('tb_member');
        $username = $this->session->userdata('username');
        $this->db->where('username', $username);
		$query = $this->db->get_where();
		return $query->row_array();
    }

	public function tampil_dataAll(){
		return $this->db->get('tb_member');
	}

public function simpan_ubahdata() // tanpa foto Tidak terpakai
	{
		$image = $this->input->post('fotoprofil', true);
		$data = [
			"username" => $this->input->post('username', true),
			"email" => $this->input->post('email', true),        
	        //"password" => md5($this->input->post('password', true)),
	        "pekerjaan" => $this->input->post('pekerjaan', true),
	        "tgl_lhr" => $this->input->post('tgl_lhr', true),
       		"fotoprofil" => $image

		];
		
		$this->db->where('id_member', $this->input->post('id_member'));
		$this->db->update('tb_member', $data);
	}

	function simpan_ubahfoto($image)
        {
		$data = [
			//"nama" => $this->input->post('nama', true),
			//"email" => $this->input->post('email', true),
	      //  "password" => md5($this->input->post('password', true)),
	       // "pekerjaan" => $this->input->post('pekerjaan', true),
	       // "tgl_lhr" => $this->input->post('tgl_lhr', true),
	        "fotoprofil" => $image

		];
		
		$this->db->where('id_member', $this->input->post('id_member'));
		$this->db->update('tb_member', $data);
	}	

	public function simpan_ubah_pswd() // tanpa foto
	{
		//$image = $this->input->post('fotoprofil', true);
		$data = [
			"nama" => $this->input->post('nama', true),
			//"email" => $this->input->post('email', true),        
	        "password" => md5($this->input->post('password', true)),
	        //"pekerjaan" => $this->input->post('pekerjaan', true),
	        //"tgl_lhr" => $this->input->post('tgl_lhr', true),
       		//"fotoprofil" => $image

		];
		
		$this->db->where('id_member', $this->input->post('id_member'));
		$this->db->update('tb_member', $data);
	}

	function simpan_pswd($image)
        {
		$data = [
			"nama" => $this->input->post('nama', true),
			//"email" => $this->input->post('email', true),
	        "password" => md5($this->input->post('password', true)),
	        //"pekerjaan" => $this->input->post('pekerjaan', true),
	        //"tgl_lhr" => $this->input->post('tgl_lhr', true),
	       // "fotoprofil" => $image

		];
		
		$this->db->where('id_member', $this->input->post('id_member'));
		$this->db->update('tb_member', $data);
	}	


	///////////////###########################################################################//////////////////
	///////////////###########################################################################//////////////////
	///////////////###########################################################################//////////////////
	///////////////###########################################################################//////////////////

 	  public function register_akun($insert_akun)
    {
        $this->db->insert('tb_member', $insert_akun);
    }

     public function ambil_data_akun_status($username)
    {
        return $this->db->get_where('tb_member', ['username' => $username, 'status_akun' => 1]);
    }

    public function ambil_data_akun($username, $email)
    {
        return $this->db->get_where('tb_member', ['username' => $username, 'email' => $email, 'status_akun']);
    }        

    public function ubah_status_akun($username)
    {
        $this->db->set('status_akun', 1);
        $this->db->where('username', $username);
        $this->db->update('tb_member');
    }
}

