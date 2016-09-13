<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_Account extends CI_Controller{


	//create constructor and load admin_manageuser model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('account_model');
	}


	//index method is load default when dashboard class is load
	public function index()
	{

		//put session data on $email and $password variable
		$email = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$type = $this->session->userdata('type');


		//Input Search Staff id
		$staffid = $this->input->post('staffid');
		//$result['results'] = $this->account_model->searchStaffResult($staffid);

		$result = array('results'	=> $this->account_model->searchStaffResult($staffid),
					   'sucmsg'	=> ""
						);

		//put email on data array to send on view
		$data['mail']=$email;


		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="account")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/account_nav',$data);
        	$this->load->view('account_views/staff_account',$result);
        	$this->load->view('templates/footer');
		}
		else
		{
			redirect('index.php/home');
		}
	}


	//This Method inputs Staff Payment data
	public function getData()
	{
		$datestring = '%Y/%m/%d';
		$date = mdate($datestring);
		$pay = array('sid' => $this->input->post('sid'),
					'payedamount' => $this->input->post('payedamount'),
					'payeddate' => $date
					);

		print_r($pay);
	}


	//This Method inputs Student Payment data
	public function staffPayment()
	{
		$staffid = $this->input->post('staffid');
		$payedamount = $this->input->post('payedamount');

		$datestring = '%Y/%m/%d';
		$date = mdate($datestring);
		$pay = array('userid' => $staffid,
					'payedamount' => $payedamount,
		 			'payeddate' => $date,
		 			);
		$status = $this->account_model->staffPayment($pay);


		$uid = $this->session->userdata('username');

   		$data['mail']=$uid;

		$result = array('results'	=> $this->account_model->searchStaffResult($uid),
					   'sucmsg'	=> "Salary Updated Successfully!!!"
						);

		if ($status == true) {
			$this->load->view('templates/header');
			$this->load->view('templates/account_nav',$data);
        	$this->load->view('account_views/staff_account',$result);
        	$this->load->view('templates/footer');

			}
	}



}