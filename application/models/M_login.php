<?php

class M_login extends CI_Model {

//fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('member_id');
    }

    //fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
    
     public function cek_login($username)
    {
        return $this->db->get_where('tb_member', ['username' => $username]);
    }
    
    public function ubah_status_akun($username)
    {
        $this->db->set('status_akun', 1);
        $this->db->where('username', $username);
        $this->db->update('tb_member');
    }

    public function ambil_data_by_email($email)
    {
        return $this->db->get_where('tb_member', ['email' => $email, 'status_akun' => 1]);
    }       

    public function tambah_token($insert_token)
    {
        $this->db->insert('tb_member_token', $insert_token);
    }

     public function ambil_data_token($token)
    {
        return $this->db->get_where('tb_member_token', ['token' => $token]);
    }

     public function ubah_password($password, $email)
    {
        $this->db->set('password', $password);
        $this->db->where('email', $email);
        $this->db->update('tb_member');
    }

    public function hapus_token($email)
    {
        $this->db->where('email', $email);
        $this->db->delete('tb_member_token');
    } 

}

