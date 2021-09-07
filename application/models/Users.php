<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Model {

	public function ceklogin($username,$password)
	{
		$sql="SELECT * FROM login WHERE UserID='$username' AND PasswordCI='$password' ";
		$eksekusi=$this->db->query($sql);
		return $eksekusi;
	}

	public function getUsers() {
		return $this->db->query("
			SELECT 
				UserID,UserName,Email,NIK,PasswordCI 
			FROM Login 
			ORDER BY UserName ASC
		")->result_object();
	}
	public function getUserByUsername($UserID, $id = null) {
		$this->db->where('UserID', $UserID);
		if ($id) {
			$this->db->where('id', $id);
		}
		return $this->db->get('Login')->row_object();
	}
	public function insertUser($data) {
		return $this->db->insert('Login', $data);
	}
	public function updateUser($data, $UserID) {
		$this->db->where('UserID', $UserID);
		return $this->db->update('Login', $data);
	}
	public function deleteUser($UserID) {
		$this->db->where('UserID', $UserID);
		return $this->db->delete('Login');
	}

	

}

