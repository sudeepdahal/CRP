<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{


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

		$note = array('notef' 	=> $this->department_model->getNotification(),
					  'sucmsg'	=> ""
					  );


		//put email on data array to send on view
		$data['mail']=$email;


		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="department")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/department_nav',$data);
        	$this->load->view('department_views/dashboard',$note);
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
			$email = $this->session->userdata('username');
			$datestring = '%Y/%m/%d';
			$date = mdate($datestring);

			$notice = array(
							'publish_date' => $date,
   							'title' => $this->input->post('title') ,
   							'body' => $this->input->post('body') ,
   							'type' => $this->input->post('ntype') ,
   							'userid' => $email ,
   							'postby' => $this->input->post('postby')
						);
			//print_r($notice);
			$status = $this->department_model->addNotice($notice);


			$data['mail']=$email;

			$note = array('notef' 	=> $this->department_model->getNotification(),
					  'sucmsg'	=> "Notice Published Successfully!!!"
					  );
			if($status == true){
				$this->load->view('templates/header');
				$this->load->view('templates/department_nav',$data);
        		$this->load->view('department_views/dashboard',$note);
        		$this->load->view('templates/footer');
			}
		}


		//This Method Update Sec Code
		public function updatecode()
		{
			$uid = $this->session->userdata('username');
   			$sec_code = $this->input->post('sec_code');
			$status = $this->department_model->updatecode($uid,$sec_code);

			$data['mail']=$uid;

			$note = array('notef' 	=> $this->department_model->getNotification(),
					  'sucmsg'	=> "Security Code Updated Successfully!!!"
					  );
			if($status == true){
				$this->load->view('templates/header');
				$this->load->view('templates/department_nav',$data);
        		$this->load->view('department_views/dashboard',$note);
        		$this->load->view('templates/footer');
			}
		}

}