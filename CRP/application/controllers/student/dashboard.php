<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{


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


		//put notefication from database to $note array for this call getNotification() function of andin_manageuser model
		$note = array('notef' => $this->student_model->getNotification(),
					  'sucmsg' => ""
					  );


		//put email on data array to send on view
		$data['mail']=$email;


		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="student")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/student_nav',$data);
        	$this->load->view('student_views/dashboard',$note);
        	$this->load->view('templates/footer');
		}
		else
		{
			redirect('index.php/home');
		}
	}


		//This function take input from notice form from view dashboard and put on $notice array and call method addNotice of model admin_model
		public function addNotice()
		{
			$notice = array(
   							'title' => $this->input->post('title') ,
   							'body' => $this->input->post('body') ,
   							'type' => $this->input->post('ntype') ,
   							'postby' => $this->input->post('postby')
						);
			print_r($notice);
			$this->student_model->addNotice($notice);
		}


		//This Method Update Sec Code
		public function updatecode()
		{
			$uid = $this->session->userdata('username');
   			$sec_code = $this->input->post('sec_code');
			$status = $this->student_model->updatecode($uid,$sec_code);

			$note = array('notef' => $this->student_model->getNotification(),
					  'sucmsg' => "Security Code Updated Successfully!!!"
					  );
			$data['mail']=$uid;
			if ($status == true) {
				$this->load->view('templates/header');
				$this->load->view('templates/student_nav',$data);
        		$this->load->view('student_views/dashboard',$note);
        		$this->load->view('templates/footer');
			}
		}


}