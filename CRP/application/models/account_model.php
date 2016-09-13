<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_Model extends CI_Model{

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
			$this->db->or_where('type =', 'staff');
			
			//latest 3 notice will return
			$query = $this->db->get('notification',5);
			 
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


	//This Method inputs Student First Entry Payment data
	public function firstStudentEntry($data)
	{
		$status=$this->db->insert('student_account',$data);
		if ($status==true) {
			return $status;
		}
	}


	//This method check Due Amount
	public function checkDue($sid)
	{
		//find latest due
		$this->db->order_by('studentpayid', 'DESC');
		$query = $this->db->get_where('student_account', array('userid' => $sid),1);

		foreach($query->result() as $row){
			$predue =  $row->due;

			return $predue;
		}
		

	}


	//This method check Total Amount
	public function checkTotal($sid)
	{
		
		//Find Total fee of initial entry
		$this->db->order_by('studentpayid', 'ASCE');
		$query = $this->db->get_where('student_account', array('userid' => $sid),1);

		foreach($query->result() as $row){
			$total =  $row->due;

			return $total;
		}
		

	}


	//This Method inputs Student Payment data
	public function studentPayment($data)
	{
		$status=$this->db->insert('student_account',$data);
		if ($status==true) {
			return $status;
			}
	}


	//This Method show all record of Searched result
	public function searchedResult($sid)
	{
		//listing according to Descending order of notification id
		$this->db->order_by('studentpayid', 'DESC');

		$this->db->where('userid =',$sid);
			
		//latest 3 notice will return
		$query = $this->db->get('student_account');
			 
		return $query;
	}


		//This Method inputs Staff Payment data
	public function staffPayment($data)
	{
		$status=$this->db->insert('staff_account',$data);
		if ($status==true) {
			return $status;
			}
	}


	//This Method show all record of Searched result
	public function searchStaffResult($sid)
	{
		//listing according to Descending order of notification id
		$this->db->order_by('staffpayid', 'DESC');

		$this->db->where('userid =',$sid);
			
		//latest 3 notice will return
		$query = $this->db->get('staff_account');
			 
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