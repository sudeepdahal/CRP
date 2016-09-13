<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AllNotice extends CI_Controller{


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



		//Pagination
		$base_url = base_url("index.php/department/allnotice/index");
		//$base_url = "http://localhost:8888/college/CRP/account/allnotice/index";
		$total_rows = $this->db->get('notification')->num_rows();
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
		$note['notef']=$this->department_model->allNotice();


		//put email on data array to send on view
		$data['mail']=$email;


		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="department")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/department_nav',$data);
        	$this->load->view('department_views/allnotice',$note);
        	$this->load->view('templates/footer');
		}
		else
		{
			redirect('index.php/home');
		}
	}


}