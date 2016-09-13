<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	//create constructor and load login model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_user');

	}


	//this function check if user is login before or not if login then load  view of login form else redirect to their dashboard according to type of user
	public function index()
	{
		$msg['message']="";

        $email = $this->session->userdata('username');
		$type = $this->session->userdata('type');
		if (!$email) {
			$this->load->helper('form');
			$this->load->view('templates/header');
        	$this->load->view('account_views/login',$msg);
        	$this->load->view('templates/footer');
		}
		elseif ($type=='admin') {
			redirect('index.php/admin/dashboard');
		}
		elseif ($type=='student') {
			redirect('index.php/student/dashboard');
		}
		elseif ($type=='library') {
			redirect('index.php/library/dashboard');
		}
		elseif ($type=='account') {
			redirect('index.php/account/dashboard');
		}
		elseif ($type=='exam') {
			redirect('index.php/exam/dashboard');
		}
		elseif ($type=='club') {
			redirect('index.php/club/dashboard');
		}
		elseif ($type=='department') {
			redirect('index.php/department/dashboard');
		}
		elseif ($type=='staff') {
			redirect('index.php/staff/dashboard');
		}


	}


	//this entry function takes imput from login view
	public function entry()
	{
        $email=$this->input->post('username');
		$password=$this->input->post('password');
		$type="account";


		//echo $user;
		//call getAllUser function with argument email and password this will return total number of row that match with given email and password
		$count=$this->login_user->getAllUser($email,$password,$type);

		//if count is 1 then put email and password on array $newdata
		if ($count==1)
		{
			$newdata = array(
        					'username'  => $email ,
        					'password'  => $password,
        					'type'		=> $type
        					);


		//put array in session and redirect acccording to user type
		$this->session->set_userdata($newdata);

		redirect('index.php/account/dashboard');



		}
		else{
			$this->printInvalidMsg();
		}

	}
	function printInvalidMsg()
{
	$msg['message']="<b>"."Invalid UserName or Password"."</b>";

			$this->load->helper('form');
			$this->load->view('templates/header');
        	$this->load->view('account_views/login',$msg);
        	$this->load->view('templates/footer');
}

}
