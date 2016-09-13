<?php 

	/**
	* 
	*/
	class Forget_Password extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('password_model');
			//$this->load->model('forget_password');
		}

		public function index(){
			$resetmsg['remsg']="";
			$this->load->view('templates/header');
			$this->load->view('forget_password',$resetmsg);
			$this->load->view('templates/footer');
		}

		//This Method Send New Password to given Email
		public function resetPassword(){
 
          	$uid = $this->input->post('email');
        	$secode = $this->input->post('secode'); 
   		 	$newpass = $this->input->post('password');

   			// print_r($uid);
   			// print_r($secode);
   			// print_r($newpass);

   			$status = $this->password_model->updatePassword($uid,$secode,$newpass);

   			$resetmsg['remsg'] = "Password Changed Successfully!!!";
   			if ($status == true) {
   				$this->load->view('templates/header');
				$this->load->view('forget_password',$resetmsg);
				$this->load->view('templates/footer');
   			}
	
      }
	}