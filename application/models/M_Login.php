<?php
class M_Login extends CI_Model{
	
	function auth_admin($username, $password){
		$query = $this->db->query("Select * From tbl_user where username='$username' AND password = '$password' limit 1");
		return $query;
	}

	function auth_dosen($username, $password){
		$query = $this->db->query("Select * From tbl_dosen where nidn_dosen='$username' AND nidn_dosen = '$password' limit 1");
		return $query;
	}

	function auth_mhs($username, $password){
		$query = $this->db->query("Select * From tbl_mhs where nim_mhs='$username' AND nim_mhs = '$password' limit 1");
		return $query;
	}
} 