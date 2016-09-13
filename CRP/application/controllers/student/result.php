<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller{


	//create constructor and load admin_manageuser model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('student_model');
	}


	//index method is load default when dashboard class is load
	public function index()
	{

		//put session data on $email and $password variable
		$email = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$type = $this->session->userdata('type');


		//put email on data array to send on view
		$data['mail']=$email;

		//$result holds the  result of this student
		$result['result'] = $this->student_model->getResult($email);


		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="student")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/student_nav',$data);
        	$this->load->view('student_views/result',$result,$data);
        	$this->load->view('templates/footer');
		}
		else
		{
			redirect('index.php/home');
		}
	}


}