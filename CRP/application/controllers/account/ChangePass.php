<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChangePass extends CI_Controller{


	// //create constructor and load admin_manageuser model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('account_model');
		$this->load->model('password_model');
	}


	// //index method is load default when dashboard class is load
	public function index()
	{
	

	// 	//put session data on $email and $password variable
	 	$email = $this->session->userdata('username');
	 	$password = $this->session->userdata('password');
	 	$type = $this->session->userdata('type');


	// 	//put notefication from database to $note array for this call getNotification() function of andin_manageuser model
	// 	//$note['notef']=$this->club_model->allNotice();


	// 	//put email on data array to send on view
	 	$data['mail']=$email;

	 	$resetmsg = array('remsg'=>"",'mail'=>$email);

	 	//print_r($resetmsg);
	 	//echo $type;
	// 	//check if session $email is set or not if set then load view dashboard else redirect to login page
	 	 if(isset($email) && $type=="account")
	 	 {
			
	 	 	$this->load->view('templates/header');
	 	 	$this->load->view('templates/account_nav',$data);
          	$this->load->view('account_views/ChangePass',$resetmsg);
         	$this->load->view('templates/footer');
	 	 }
	 	else
	 	{
	 		redirect('index.php/home');
		}
	 }

	// //This Method Send New Password to given Email
	 	public function resetPassword(){
 
         	$email = $this->session->userdata('username');
         	$secode = $this->input->post('secode'); 
   			$newpass = $this->input->post('password');
   			$data['mail']=$email;

 //   			// print_r($uid);
 //   			// print_r($secode);
 //   			// print_r($newpass);

    			$resetmsg = array('remsg'=>"Password Changed Sucessfully!!!",'mail'=>$email);

   			$status = $this->password_model->updatePassword($email,$secode,$newpass);
   			if ($status == true) {
				$this->load->view('templates/header');
				$this->load->view('templates/club_nav',$data);
				$this->load->view('account_views/ChangePass',$resetmsg);
				$this->load->view('templates/footer');
   			}
	
      }


}