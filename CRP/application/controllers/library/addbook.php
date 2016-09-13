<?php
defined('BASEPATH') OR exit('No direct script access allow');

class AddBook extends CI_Controller{

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

		$smg['sucmsg'] = "";

		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="library")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/library_nav',$data);
        	$this->load->view('library_views/addbook',$smg);
        	$this->load->view('templates/footer');
		}
		else
		{
			redirect('index.php/home');
		}
	}



	//This function add books
	public function addBook()
	{
		$books = array( 'bookid' => $this->input->post('bookid'),
						'booktitle' => $this->input->post('booktitle'),
						'author' => $this->input->post('author'),
						'description' => $this->input->post('description'),
						'totalbook' => $this->input->post('totalbook'),
						'department' => $this->input->post('department'),
						'category' => $this->input->post('category')
		 				);
		//print_r($books);
		$status = $this->library_model->addBooks($books);

		$email = $this->session->userdata('username');
		$data['mail']=$email;
		$smg['sucmsg'] = "New Book Added Successfully!!!";
		if ($status == true) {
			$this->load->view('templates/header');
			$this->load->view('templates/library_nav',$data);
        	$this->load->view('library_views/addbook',$smg);
        	$this->load->view('templates/footer');
		}
	}


}