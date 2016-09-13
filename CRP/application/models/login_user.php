<?php

class Login_User extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

	//getAlUser function takes 2 args and return total number of row match with given args data
	function getAllUser($un,$ps,$ty)
	{
		$uid=$un;
		$type=$ty;
		$password=$ps;
		$query = $this->db->get_where('users', array('userid' => $uid,'password'=>$password,'usertype' => $type));
		return $query->num_rows();
	}
}