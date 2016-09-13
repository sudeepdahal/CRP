<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_Model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}


	//This method returns the Notifications or notices
	public function getNotification()
		{
			//listing according to Descending order of notification id
			 $this->db->order_by('nid', 'DESC');

			 $this->db->where('type =', 'all');
			 $this->db->or_where('type =', 'student');

			 //latest 3 notice will return
			 $query = $this->db->get('notification',4);
			 
			 return $query;
			
		}


			//This Method Show all Notice
	public function allNotice()
	{
		//listing according to Descending order of notification id
		$this->db->order_by('nid', 'DESC');

		$this->db->where('type =', 'all');
		$this->db->or_where('type =', 'student');

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
			echo "success";

		}
	}


	//This Method show all record of  Student Account
	public function accountInfo($sid)
	{
		//listing according to Descending order of notification id
		$this->db->order_by('studentpayid', 'DESC');

		$this->db->where('userid =',$sid);
			
		$query = $this->db->get('student_account');
			 
		return $query;
	}


	//This method is use to search and student Library book data
	public function libraryInfo($uid)
	{
		//listing according to Descending order of notification id
		$this->db->order_by('issueid', 'DESC');
		$this->db->where('userid =', $uid);
		$query = $this->db->get('issuebook');
		return $query;

	}

	//This Method return All available result of student with given id
	public function getResult($data){
		$this->db->where('userid=',$data);
		$query = $this->db->get('marks');
		return $query;
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