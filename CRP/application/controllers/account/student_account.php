<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_Account extends CI_Controller{


	//create constructor and load admin_manageuser model
	public function __construct()
	{
		parent::__construct();
		$this->load->library('calendar');
		$this->load->model('account_model');
	}


	//index method is load default when das hboard class is load
	public function index()
	{

		//put session data on $email and $password variable
		$email = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$type = $this->session->userdata('type');


		//Input Search Sid
		$sid = $this->input->post('search');
		//$result['results'] = $this->account_model->searchedResult($sid);

		$result = array('results'	=> $this->account_model->searchedResult($sid),
					   'sucmsg'	=> ""
						);

		//put email on data array to send on view
		$data['mail']=$email;


		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="account")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/account_nav',$data);
        	$this->load->view('account_views/student_account',$result);
        	$this->load->view('templates/footer');
		}
		else{
			redirect('index.php/home');
		}
	}



	//This Method inputs Student First Entry Payment data
	public function firstStudentEntry()
	{
		$pay = array('userid' => $this->input->post('sid'),
					'totalfee' => $this->input->post('totalfee'),
					'due' => $this->input->post('totaldue')
					);

		$status = $this->account_model->firstStudentEntry($pay);

		$uid = $this->session->userdata('username');
   		$sec_code = $this->input->post('sec_code');

   		$data['mail']=$uid;

		$result = array('results'	=> $this->account_model->searchedResult($uid),
					   'sucmsg'	=> "Fee Inputed Successfully!!!"
						);

		if ($status == true) {
			$this->load->view('templates/header');
			$this->load->view('templates/account_nav',$data);
        	$this->load->view('account_views/student_account',$result);
        	$this->load->view('templates/footer');

			}

	}


	//This Method inputs Student Payment data
	public function studentPayment()
	{
		$studentid = $this->input->post('sid');
		$payedamount = $this->input->post('payedamount');

		$previousdue = $this->account_model->checkDue($studentid);

		$totalfee = $this->account_model->checkTotal($studentid);
		
		$due = $previousdue-$payedamount;



		$datestring = '%Y/%m/%d';
		$date = mdate($datestring);
		$pay = array('userid' => $studentid,
					'payedamount' => $payedamount,
		 			'totalfee' => $totalfee,
		 			'payeddate' => $date,
		 			'due' => $due
		 			);
		$status = $this->account_model->studentPayment($pay);



		$uid = $this->session->userdata('username');

   		$data['mail']=$uid;

		$result = array('results'	=> $this->account_model->searchedResult($uid),
					   'sucmsg'	=> "Fee Updated Successfully!!!"
						);

		if ($status == true) {
			$this->load->view('templates/header');
			$this->load->view('templates/account_nav',$data);
        	$this->load->view('account_views/student_account',$result);
        	$this->load->view('templates/footer');

			}
	}



}