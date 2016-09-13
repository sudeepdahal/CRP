<?php
defined('BASEPATH') OR exit('No direct script access allow');

class Settings extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('library_model');
	}


	public function index()
	{

		//put session data on $email and $password variable
		$email = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$type = $this->session->userdata('type');


		//put email on data array to send on view
		$data['mail']=$email;


		//Show Searched user detail
		$uid = $this->input->post('userid');
		$bookdata['book'] = $this->library_model->allUser($uid);


		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="library")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/library_nav',$data);
        	$this->load->view('library_views/settings',$bookdata);
        	$this->load->view('templates/footer');
		}
		else
		{
			redirect('index.php/login');
		}
	}


}