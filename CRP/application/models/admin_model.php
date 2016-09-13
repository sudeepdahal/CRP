<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//This model class Contain all Admin Related database data interaction
class Admin_Model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}


	//This method insert data to users table
	public function addUser($data)
	{
		$status=$this->db->insert('users',$data);
		if ($status==true) {
			return $status;
		}
		
	}


	//This method Delets User by using User id
	public function deleteUser($uid)
	{
		$id=$uid;
		$status=$this->db->delete('users', array('userid' => $id));
		if ($status) {
			return $status;
		}
	}



	//This method show User according to their type and return data
	public function showAllUser($user_type,$nam)
	{
		//$name=$nam;
		$usertype=$user_type;
		if ($usertype=="") {
			$query = $this->db->get('users');
			return $query;
		}
		

		if ($usertype=="admin") {
			$query = $this->db->get_where('users', array('usertype' => $usertype) );
			return $query;
		}
		if ($usertype=="student") {
			$query = $this->db->get_where('users', array('usertype' => $usertype) );
			return $query;
		}
		if ($usertype=="account") {
			$query = $this->db->get_where('users', array('usertype' => $usertype) );
			return $query;
		}
		if ($usertype=="department") {
			$query = $this->db->get_where('users', array('usertype' => $usertype) );
			return $query;
		}
		if ($usertype=="exam") {
			$query = $this->db->get_where('users', array('usertype' => $usertype) );
			return $query;
		}
		if ($usertype=="staff") {
			$query = $this->db->get_where('users', array('usertype' => $usertype) );
			return $query;
		}
		if ($usertype=="club") {
			$query = $this->db->get_where('users', array('usertype' => $usertype) );
			return $query;
		}
		if ($usertype=="library") {
			$query = $this->db->get_where('users', array('usertype' => $usertype) );
			return $query;
		}

	}



	//This method returns the Notifications or notices
	public function getNotification()
	{
		//listing according to Descending order of notification id
		$this->db->order_by('nid', 'DESC');

		$this->db->where('type =', 'all');
		$this->db->or_where('type =', 'staff');

		//latest 3 notice will return
		$query = $this->db->get('notification',5);
			 
		return $query;
			
	}


	//This Method Show all Notice
	public function allNotice()
	{
		//listing according to Descending order of notification id
		$this->db->order_by('nid', 'DESC');

		$this->db->where('type =', 'all');
		$this->db->or_where('type =', 'staff');

		//latest 5 notice retun In Our case Segment is 4 (account/allnotice/index/5)
		//here account =1 allnotice =2 index =3 and 4 th is segment
		$query = $this->db->get('notification',5,$this->uri->segment(4));
		return $query;
	}


	//This method insert new Notices into Noticification table
	public function addNotice($data)
	{
		$status=$this->db->insert('notification',$data);
		if ($status==true) {
			return $status;
		}
	}

	//This Method Update Sec code
	public function updatecode($sid,$scode)
	{
		// gives UPDATE `issuebook` SET `issueddate` = '$date' WHERE `id` = 2
		$this->db->set('security_code', $scode);
		$this->db->where('userid', $sid);
		$status = $this->db->update('users'); 
		if ($status==true) {
			return $status;
		}
	}

}