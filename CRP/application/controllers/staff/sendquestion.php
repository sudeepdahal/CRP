<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SendQuestion extends CI_Controller{


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



		//put email on data array to send on view
		$data = array('mail'=>$email, 'sucmsg'=>"");


		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="staff")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/staff_nav',$data);
        	$this->load->view('staff_views/sendquestion',$data);
        	$this->load->view('templates/footer');
		}
		else
		{
			redirect('index.php/home');
		}
	}


	//This Method is take input Question from send Question view and send this to staff model to store Question on database
	public function sendQuestion()
	{
		$datestring = '%Y/%m/%d';
		$date = mdate($datestring);
		$question = array(	'course_id' => $this->input->post('subject_id'),
							'date' => $date,
							'course_name' => $this->input->post('subject_name'),
							'userid' => $this->session->userdata('username'),
							'qbody' => $this->input->post('qbody'),
							'fullmarks' => $this->input->post('fullmarks'),
							'passmarks' => $this->input->post('passmarks'),
							'semester' => $this->input->post('semester'),
							'term' => $this->input->post('term'),
							'time' => $this->input->post('time'),
							'year' => $this->input->post('year')
							);
		$status = $this->staff_model->sendQuestion($question);

		$email = $this->session->userdata('username');
		$data = array('mail'=>$email, 'sucmsg'=>"Question Sent Successfully!!!");
		if($status == true){
			$this->load->view('templates/header');
			$this->load->view('templates/staff_nav',$data);
        	$this->load->view('staff_views/sendquestion',$data);
        	$this->load->view('templates/footer');
		}
	}


}