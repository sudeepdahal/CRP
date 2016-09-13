<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageUser extends CI_Controller{


	//create constructor and load admin_manageuser model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('club_model');
	}


	//index method is load default when dashboard class is load
	public function index()
	{

		//put session data on $email and $password variable
		$email = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$type = $this->session->userdata('type');

		//Display member on table
		$status = $this->input->post('status');
		//$member['member'] = $this->club_model->searchMember($status);

		$member =  array('member' => $this->club_model->searchMember($status),
						 'sucmsg' => ""
						 );

		//put email on data array to send on view
		$data['mail']=$email;


		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="club")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/club_nav',$data);
        	$this->load->view('club_views/manageuser',$member);
        	$this->load->view('templates/footer');
		}
		else
		{
			redirect('index.php/home');
		}
	}


	//This method Entry the club members
	public function addMember(){
		$notice = array(
   						'userid' => $this->input->post('sid') ,
   						'name' => $this->input->post('sname') ,
   						'post' => $this->input->post('post') 
						);
		$status = $this->club_model->addMember($notice);


		$uid = $this->session->userdata('username');

   		$data['mail']=$uid;

		$member =  array('member' => $this->club_model->searchMember($status),
						 'sucmsg' => "Club Member Added Successfully!!!"
						 );
			if ($status == true) {
				$this->load->view('templates/header');
				$this->load->view('templates/club_nav',$data);
        		$this->load->view('club_views/manageuser',$member);
        		$this->load->view('templates/footer');
			}
	}

	//This method Update the club members Status
	public function updateStatus(){

		$datestring = '%Y/%m/%d';
		$date = mdate($datestring);

		$sid = $this->input->post('sid');
		$status = $this->input->post('status');
		
		$status = $this->club_model->updateStatus($sid,$date,$status);


		$uid = $this->session->userdata('username');

   		$data['mail']=$uid;

		$member =  array('member' => $this->club_model->searchMember($status),
						 'sucmsg' => "Updated Status Successfully"
						 );
			if ($status == true) {
				$this->load->view('templates/header');
				$this->load->view('templates/club_nav',$data);
        		$this->load->view('club_views/manageuser',$member);
        		$this->load->view('templates/footer');
			}

	}


}