<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountInfo extends CI_Controller{


	//create constructor and load admin_manageuser model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('staff_model');
	}


	//index method is load default when dashboard class is load
	public function index()
	{

		//put session data on $email and $password variable
		$email = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$type = $this->session->userdata('type');


		$staff['record'] = $this->staff_model->paymentRecord($email);
		//put email on data array to send on view
		$data['mail']=$email;


		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="staff")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/staff_nav',$data);
        	$this->load->view('staff_views/accountinfo',$staff);
        	$this->load->view('templates/footer');
		}
		else
		{
			redirect('index.php/home');
		}
	}


}