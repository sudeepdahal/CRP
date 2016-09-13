<?php
defined('BASEPATH') OR exit('No direct script access allow');

class AllBook extends CI_Controller{

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



		//all book from book tables
		$category = $this->input->post('category');
		$books['book']=$this->library_model->showAllBook("",$category,"");


		
		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="library")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/library_nav',$data);
        	$this->load->view('library_views/allbook',$books);
        	$this->load->view('templates/footer');
		}
		else
		{
			redirect('index.php/home');
		}
	}



	//This function return all book of books table
	public function showAllBook()
	{
		//$department => $this->input->post('department');
		//$category=>$this->input->post('category');
		//$subcategory=>$this->input->post('subcategory');

		//$books['book']=$this->library_model->showAllBook("","","");
	}


}