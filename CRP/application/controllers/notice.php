<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CI_Controller{

	//create constructor and load admin_manageuser model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('notice_model');
	}

	public function detail($nid)
	{
		$notice['notice'] = $this->notice_model->getnotice($nid);

		// $this->load->view('templates/header');
		// $this->load->view('templates/club_nav',$data);
  //       $this->load->view('club_views/dashboard',$note);
  //       $this->load->view('templates/footer');
		
	}
}