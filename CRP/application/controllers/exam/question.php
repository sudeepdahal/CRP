<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller{


	//create constructor and load admin_manageuser model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('exam_model');
	}


	//index method is load default when dashboard class is load
	public function detail($qid)
	{

		//put session data on $email and $password variable
		$email = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$type = $this->session->userdata('type');


		//put notefication from database to $note array for this call getNotification() function of andin_manageuser model
		$question['question'] = $this->exam_model->getQuestion($qid);


		//put email on data array to send on view
		$data['mail']=$email;


		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="exam")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/exam_nav',$data);
        	$this->load->view('templates/question_detail',$question);
        	// $this->load->view('templates/footer');
		}
		else
		{
			redirect('index.php/home');
		}
	}

}