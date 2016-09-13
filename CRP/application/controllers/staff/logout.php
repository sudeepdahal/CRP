<?php

class Logout extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	}


	//Destroy session and redirect to login controller
	public function index()
	{
		$this->session->sess_destroy();
		redirect('index.php/staff/login');
	}
}