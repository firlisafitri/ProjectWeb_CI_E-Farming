<?php
Class M_Login extends CI_Model{

	function auth_admin($username, $password){
		$query = $this->db->query("Select * from tbl_admin where username='$username' AND password='$password' limit 1");
		return $query;
	}

	function auth_customer($username, $password){
		$query = $this->db->query("Select * from tbl_customer where username='$username' AND password='$password' limit 1");
		return $query;
	}

}