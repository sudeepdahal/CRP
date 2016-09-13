<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_Model extends CI_Model{

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


	//This Method is take input Question from send Question view and send this to staff model to store Question on database
	public function sendQuestion($data){
		$status=$this->db->insert('question',$data);
		if ($status==true) {
			return $status;
		}
	}


	//This Method is take input Marks from send Question view and send this to staff model to store Marks on database
	public function sendMarks($data){
		$status=$this->db->insert('marks',$data);
		if ($status==true) {
			return $status;
		}
	}


	//This Method is take input Marks from send Question view and send this to staff model to store Marks on database
	public function sendAllMarks($data){
		$status=$this->db->insert_batch('marks',$data);
		if ($status==true) {
			return $status;
		}
	}


	//This Method show all record of  Staff Payment
	public function paymentRecord($sid)
	{
		//listing according to Descending order of notification id
		$this->db->order_by('staffpayid', 'DESC');

		$this->db->where('userid =',$sid);
			
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