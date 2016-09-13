<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password_Model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}


	

	//This Method Update Status of clun Member
	public function updatePassword($sid,$secode,$pass)
	{
		// gives UPDATE `issuebook` SET `issueddate` = '$date' WHERE `id` = 2
			$this->db->set('password', $pass);
			$this->db->where('userid', $sid);
			$this->db->where('security_code', $secode);
			$status = $this->db->update('users'); 
			if ($status==true) {
				return $status;
			}
		//echo $sid.$secode.$pass;
		
	}

	//This Method Updates Security code
	public function updateSecurityCode($sid,$secode)
	{
		// gives UPDATE `issuebook` SET `issueddate` = '$date' WHERE `id` = 2
			$this->db->set('security_code', $secode);
			$this->db->where('userid', $sid);
			$status = $this->db->update('users'); 
			if ($status==true) {
				return $status;
			}
		//echo $sid.$secode.$pass;
		
	}

}
