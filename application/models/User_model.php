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

	public function addUser($data)
	{
		$this->db->insert('tbl_user', $data);
	}

	public function editUser($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_user', $data);
	}

	public function getUserByID($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('tbl_user')->result_array();
	}

	public function changeStatus($id, $status)
	{
		$this->db->where('id', $id);
		$this->db->set('status', $status);
		$this->db->update('tbl_user');
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */