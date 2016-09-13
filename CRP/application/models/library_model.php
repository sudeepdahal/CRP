<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library_Model extends CI_Model{

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

			//latest 3 notice will show
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


	//This function add books on books table
	public function addBooks($books)
	{
		$status=$this->db->insert('books',$books);
		if ($status==true) {
			return $status;
		}
	}


	//This function show all books of book table with Search Result
	public function showAllBook($dp,$ct,$sct)
	{
		
		if ($dp=="" && $ct=="" && $sct=="") {
			$query = $this->db->get('books');
			return $query;
		}
		

		if ($dp=="" && $ct==$ct && $sct=="") {
			$query = $this->db->get_where('books', array('category' => $ct) );
			return $query;
		}
/*
		if ($usertype=="student") {
			$query = $this->db->get_where('users', array('usertype' => $usertype) );
			return $query;
		}

		if ($usertype=="Exam") {
			$query = $this->db->get_where('users', array('usertype' => $usertype) );
			return $query;
		}
		*/

	}


	//This Method Issue The book
	public function issueBook($data)
	{
		$status=$this->db->insert('issuebook',$data);
		if ($status==true) {
			return $status;
		}
	}


	//This method Issued Book and Update issuebook table and put issued date
	public function issuedBook($uid,$bid,$date,$fine)
	{
		// gives UPDATE `issuebook` SET `issueddate` = '$date' WHERE `id` = 2
		$this->db->set('issueddate', $date);
		$this->db->set('fine', $fine);

		 $this->db->where('userid', $uid);
		 //$this->db->where('fine', $fine);
		$status = $this->db->update('issuebook'); 
		if ($status==true) {
			return $status;
		}
	}


	//This method is use to search student issue book 
	public function searchUser($uid)
	{
		$this->db->order_by('issueid', 'DESC');
		$this->db->where('userid =', $uid);
		
		$query = $this->db->get('issuebook');
		return $query;
	}


	//This method is use to search student issue book 
	public function searchUser2($uid,$bid)
	{
		$this->db->order_by('issueid', 'DESC');
		$this->db->where('userid =', $uid);
		$this->db->where('bookid =', $bid);
		
		$query = $this->db->get('issuebook');
		return $query;
	}

	

	//This method is use to search and Show all student issue book data
	public function allUser($uid)
	{
		if ($uid =="") {
			//listing according to Descending order of notification id
			$this->db->order_by('issueid', 'DESC');
			$query = $this->db->get('issuebook');
			return $query;
		}
		else{
				//listing according to Descending order of notification id
			 	$this->db->order_by('issueid', 'DESC');
			 	$this->db->where('userid =', $uid);
			 	$query = $this->db->get('issuebook');
				return $query;
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