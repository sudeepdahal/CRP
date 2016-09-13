<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageUser extends CI_Controller{


	//create constructor and load admin_manageuser model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}


	//index method is load default when dashboard class is load
	public function index()
	{

		//put session data on $email and $password variable
		$email = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$type = $this->session->userdata('type');


		//put email on data array to send on view
		$data['mail']=$email;


		//check if session $email is set or not if set then load view manageuser else redirect to login page
		if(isset($email) && $type=="admin")
		{

			//call model method showAllUser() to show all user send argument "","" and put result on userdata array and send it to view admin_views/manageuser
			//$userdata['user']=$this->admin_model->showAllUser("","");

			$userdata = array('user'	=> $this->admin_model->showAllUser("",""),
							  'sucmsg'=>	""
							  );

			$this->load->view('templates/header');
			$this->load->view('templates/admin_nav',$data);
        	$this->load->view('admin_views/manageuser',$userdata);
        	$this->load->view('templates/footer');
        }
        else
		{
			redirect('index.php/home');
		}
	}


	//This function add new users for this call model method addUser with argument input data array 
	public function addUser()
	{

		$data = array(
   			'userid' => $this->input->post('userid') ,
   			'password' => $this->input->post('password') ,
   			'name' => $this->input->post('name') ,
   			'usertype' => $this->input->post('user_type')
		);
		$status = $this->admin_model->addUser($data);

		$uid = $this->session->userdata('username');
   		$sec_code = $this->input->post('sec_code');

   		$data['mail']=$uid;

		$userdata = array('user'	=> $this->admin_model->showAllUser("",""),
							  'sucmsg'=>	"User Added Successfully!!!"
							  );
		if ($status == true) {
			$this->load->view('templates/header');
			$this->load->view('templates/admin_nav',$data);
        	$this->load->view('admin_views/manageuser',$userdata);
        	$this->load->view('templates/footer');

			}		
	}


	//This method show all user into view by taking data from showAllUser method of admin_manageuser model
	public function showAllUser()
	{

		//put session data on $email and $password variable
		$email = $this->session->userdata('username');
		$password = $this->session->userdata('password');


		//put email on data array to send on view
		$data['mail']=$email;


		//Get search Filter search word and user type
		$usertype = $this->input->post('search_usertype');
		$search = $this->input->post('search');


		//check if session $email is set or not if set then load view manageuser else redirect to login page
		if(isset($email))
		{

			//call model method showAllUser() to show all user send argument "","" and put result on userdata array and send it to view admin_views/manageuser
			//$userdata['user']=$this->admin_model->showAllUser($usertype,$search);

			$userdata = array('user'	=> $this->admin_model->showAllUser($usertype,$search),
							  'sucmsg'=>	""
							  );

			$this->load->view('templates/header');
			$this->load->view('templates/admin_nav',$data);
        	$this->load->view('admin_views/manageuser',$userdata);
        	$this->load->view('templates/footer');
        }
        else
		{
			redirect('index.php/login');
		}
	}


	//This method takes user id as input from form and send data to amdin_model and method deleteUser is called and this will process delete Query
	public function deleteUser()
	{
		$userid=$this->input->post('uid');
		$status = $this->admin_model->deleteUser($userid);

		$uid = $this->session->userdata('username');
   		$sec_code = $this->input->post('sec_code');

   		$data['mail']=$uid;

		$userdata = array('user'	=> $this->admin_model->showAllUser("",""),
							  'sucmsg'=>	"User deleted Successfully!!!"
							  );
		if ($status == true) {
			$this->load->view('templates/header');
			$this->load->view('templates/admin_nav',$data);
        	$this->load->view('admin_views/manageuser',$userdata);
        	$this->load->view('templates/footer');

			}
	}
}