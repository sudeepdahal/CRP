<?php
defined('BASEPATH') OR exit('No direct script access allow');

class IssueBook extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('library_model');
	}


	public function index()
	{

		//put session data on $email and $password variable
		$email = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$type = $this->session->userdata('type');

		//put email on data array to send on view
		$data['mail']=$email;


		//Show Searched user detail
		$uid = $this->input->post('uid');
		//$bookdata['book'] = $this->library_model->searchUser($uid);
		$bookdata = array('book' => $this->library_model->searchUser($uid),
						  'sucmsg' => ""
						  );

		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="library")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/library_nav',$data);
        	$this->load->view('library_views/issuebook',$bookdata);
        	$this->load->view('templates/footer');
		}
		else
		{
			redirect('index.php/home');
		}
	}


	//This function Issue book
	public function issueBook()
	{
		//This 2 line need date halper and mdate return date according to $datestring 
		$datestring = '%Y/%m/%d';
		$today = mdate($datestring);

		$due_day = $this->input->post('due_date');
		$issue_date = $this->input->post('issue_date');

		$due_date_time =  strtotime($today) + $due_day*60*60*24;
		$due_date = date('Y-m-d',$due_date_time);
		
		
		$data = array('userid' =>$this->input->post('sid'),
					  'bookid' =>$this->input->post('bid'),
					  'issuedate' => $today,
					  'due_date' => $due_date
					  );
		//print_r($data);
		$status = $this->library_model->issueBook($data);

		$email = $this->session->userdata('username');
		$data['mail']=$email;
		$bookdata = array('book' => $this->library_model->searchUser($email),
						  'sucmsg' => "Book Issued Successfully!!!"
						  );
		if($status == true){
			$this->load->view('templates/header');
			$this->load->view('templates/library_nav',$data);
        	$this->load->view('library_views/issuebook',$bookdata);
        	$this->load->view('templates/footer');
		}
	}


	//This function Issued book
	public function issuedBook()
	{
		//This 2 line need date halper and mdate return date according to $datestring 
		$datestring = '%Y/%m/%d';
		$today = mdate($datestring);
		$exclude_day = $this->input->post('exclude_day');

		$userid = $this->input->post('sid');
		$bookid = $this->input->post('bid');
		$fine_per_day = $this->input->post('fine_per_day');

		$issueddate = $today;


		$date_difference = 0;

		//Get issue date
		$issue = $this->library_model->searchUser2($userid,$bookid);
		 foreach ($issue->result() as $row ) {
		 	$due_date = $row->due_date;
			

		 	$date_difference = strtotime($today)-strtotime($due_date);
		 	$date_difference = floor($date_difference/(60*60*24));

		 if ($date_difference >0) {
		 	$fine = ($date_difference-$exclude_day)*$fine_per_day;
		 }else{
		 	$fine = 0;
		 }
		 //echo $fine;
		$status = $this->library_model->issuedBook($userid, $bookid, $issueddate,$fine);

		$email = $this->session->userdata('username');
		$data['mail']=$email;
		$bookdata = array('book' => $this->library_model->searchUser($email),
						  'sucmsg' => "Book Returned Successfully!!!"
						  );
		if($status == true){
			$this->load->view('templates/header');
			$this->load->view('templates/library_nav',$data);
        	$this->load->view('library_views/issuebook',$bookdata);
        	$this->load->view('templates/footer');
		}
		 }
 	}


}