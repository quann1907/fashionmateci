<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	function user_login($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $query = $this->db->get('tbl_user')->result();
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */