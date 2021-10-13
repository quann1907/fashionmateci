<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function user_login($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $query = $this->db->get('tbl_user')->result();
	}

	public function getUser()
	{
		return $this->db->get('tbl_user')->result_array();
	}
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */