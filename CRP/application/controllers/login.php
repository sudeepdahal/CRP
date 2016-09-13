<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

// class Login extends CI_Controller {


// 	//create constructor and load login model
// 	public function __construct()
// 	{
// 		parent::__construct();
// 		$this->load->model('login_user');
		
// 	}


// 	//this function check if user is login before or not if login then load  view of login form else redirect to their dashboard according to type of user
// 	public function index()
// 	{
		 	
			
//         	$email = $this->session->userdata('username');
// 			$type = $this->session->userdata('type');
// 			if (!$email) {
// 				$this->load->helper('form');
// 				$this->load->view('./templates/header');
//         		$this->load->view('login');
//         		$this->load->view('templates/footer');
// 			}
// 			elseif ($type=='admin') {
// 				redirect('admin/dashboard');
// 			}
// 			elseif ($type=='student') {
// 				redirect('student/dashboard');
// 			}
// 			elseif ($type=='library') {
// 				redirect('library/dashboard');
// 			}
// 			elseif ($type=='account') {
// 				redirect('account/dashboard');
// 			}
// 			elseif ($type=='exam') {
// 				redirect('exam/dashboard');
// 			}
// 			elseif ($type=='club') {
// 				redirect('club/dashboard');
// 			}
// 			elseif ($type=='department') {
// 				redirect('department/dashboard');
// 			}
// 			elseif ($type=='staff') {
// 				redirect('staff/dashboard');
// 			}

		
// 	}


// 	//this entry function takes imput from login view
// 	public function entry()
// 	{
//         $email=$this->input->post('username');
// 		$password=$this->input->post('password');
// 		$type=$this->input->post('type');
		
			
// 		//echo $user;
// 		//call getAllUser function with argument email and password this will return total number of row that match with given email and password
// 		$count=$this->login_user->getAllUser($email,$password);

// 		//if count is 1 then put email and password on array $newdata
// 		if ($count==1) 
// 		{
// 			$newdata = array(
//         					'username'  => $email ,
//         					'password'  => $password,
//         					'type'		=> $type
//         					);


// 		//put array in session and redirect acccording to user type
// 		$this->session->set_userdata($newdata);


// 		//redirect according to user type
// 		if ($type=="admin") 
// 		{
// 			redirect('admin/dashboard');
// 		}
// 		elseif ($type=="student") 
// 		{
// 			redirect('student/dashboard');
// 		}
// 				elseif ($type=="library") 
// 				{
// 					redirect('library/dashboard');
// 				}
// 				elseif ($type=="account") 
// 				{
// 					redirect('account/dashboard');
// 				}
		
// 				else
// 					redirect('login');

// 			}
// 			else
// 				redirect('login');
				
// 	}

// }
