<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AllQuestion extends CI_Controller{


	//create constructor and load admin_manageuser model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('exam_model');
	}


	//index method is load default when dashboard class is load
	public function index()
	{

		//put session data on $email and $password variable
		$email = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$type = $this->session->userdata('type');



		//Pagination
		$base_url = base_url("exam/allquestion/index");
		//$base_url = "http://localhost:8888/college/CRP/account/allnotice/index";
		$total_rows = $this->db->get('question')->num_rows();
		$per_page = 5;
		$num_links = 5;
		$config = array('base_url' => $base_url,
						'per_page' => $per_page,
						'num_links' => $num_links,
						'total_rows' => $total_rows,
						'full_tag_open' => '<ul class="pager">',
						'full_tag_close' => '</ul>',
						// 'num_tag_open' =>'<li>',
						// 'num_tag_close' =>'</li>',
						'next_tag_open' => '<li>',
						'next_tag_close' => '</li>',
						'prev_tag_open' => '<li>',
						'prev_tag_close' => '</li>',
						// 'cur_tag_open' => '<li >',
						// 'cur_tag_close' => '</li>'
						);

		$this->pagination->initialize($config);



		//put notefication from database to $note array for this call getNotification() function of andin_manageuser model
		$exam['exam']=$this->exam_model->allQuestion();


		//put email on data array to send on view
		$data['mail']=$email;


		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="exam")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/exam_nav',$data);
        	$this->load->view('exam_views/allquestion',$exam);
        	$this->load->view('templates/footer');
		}
		else
		{
			redirect('index.php/home');
		}
	}


}