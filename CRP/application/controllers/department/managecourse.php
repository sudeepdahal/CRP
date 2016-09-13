<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageCourse extends CI_Controller{


	//create constructor and load admin_manageuser model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('department_model');
	}


	//index method is load default when dashboard class is load
	public function index()
	{

		//put session data on $email and $password variable
		$email = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$type = $this->session->userdata('type');


		//put notefication from database to $note array for this call getNotification() function of andin_manageuser model
		//$note['notef']=$this->department_model->getNotification();
		$msg['sucmsg'] = "";

		//put email on data array to send on view
		$data['mail']=$email;


		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="department")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/department_nav',$data);
        	$this->load->view('department_views/managecourse',$msg);
        	$this->load->view('templates/footer');
		}
		else
		{
			redirect('index.php/home');
		}
	}


		//This function Add new course
		public function addCourse()
		{

			$course = array(
   							'course_id' => $this->input->post('course_id') ,
   							'course_name' => $this->input->post('course_name') ,
   							'credit' => $this->input->post('credit') ,
   							'semester' => $this->input->post('semester'),
   							'detail' => $this->input->post('body')
						);
			$status = $this->department_model->addCourse($course);

			$email = $this->session->userdata('username');
			$data['mail']=$email;
			$msg['sucmsg'] = "Course Added Successfully!!!";
			if($status == true){
				$this->load->view('templates/header');
				$this->load->view('templates/department_nav',$data);
        		$this->load->view('department_views/managecourse',$msg);
        		$this->load->view('templates/footer');
			}
		}

}