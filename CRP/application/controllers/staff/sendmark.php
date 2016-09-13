<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SendMark extends CI_Controller{


	//create constructor and load admin_manageuser model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('staff_model');
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


		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="staff")
		{
			$a = array('no'=> 1, 'sucmsg'=>"");
			$this->load->view('templates/header');
			$this->load->view('templates/staff_nav',$data);
        	$this->load->view('staff_views/sendmark',$a);
        	$this->load->view('templates/footer');
		}
		else
		{
			redirect('index.php/home');
		}
	}


	//This Function Return Number of Student 
	public function totalStudet(){
		$noOfStudent = $this->input->post('student_number');
		return $noOfStudent;

	}

	//This Method send The marks of student
	public function sendMarksDisplay(){

		$noOfStudent ['no'] = $this->totalStudet();
		

        //put session data on $email and $password variable
		$email = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$type = $this->session->userdata('type');



		//put email on data array to send on view
		$data['mail']=$email;


		//check if session $email is set or not if set then load view dashboard else redirect to login page
		if(isset($email) && $type=="staff")
		{
			$this->load->view('templates/header');
			$this->load->view('templates/staff_nav',$data);
        	$this->load->view('staff_views/sendmark',$noOfStudent);
        	$this->load->view('templates/footer');
		}
		else
		{
			redirect('index.php/home');
		}
	}


	//This Method send The marks of student
	public function sendMarks($noOfStudent ){
		$datestring = '%Y/%m/%d';
		$date = mdate($datestring);

		//echo "Total student".$noOfStudent;

		$teacherid = $this->session->userdata('username');
		$subjectid = $this->input->post('subjectid');
		$fullmarks = $this->input->post('fullmarks');
		$passmarks = $this->input->post('passmarks');
		$semester = $this->input->post('semester');
		$term = $this->input->post('term');

		$i;
		$marks = array(
						array('teacherid' => $teacherid,
							'course_id' => $subjectid,
							'fullmarks' => $fullmarks,
							'passmarks' => $passmarks,
							'semester' => $semester,
							'term' => $term,
							'userid' => '',
							'obtainmarks' => '',
							'date' => $date ),

		 				);

		for ($i=0; $i < $noOfStudent; $i++) { 
			$marks[$i]['teacherid'] = $teacherid;
			$marks[$i]['course_id'] = $subjectid;
			$marks[$i]['fullmarks'] = $fullmarks;
			$marks[$i]['passmarks'] = $passmarks;
			$marks[$i]['semester'] = $semester;
			$marks[$i]['term'] = $term;
			$marks[$i]['userid'] = $this->input->post("sid".$i);
			$marks[$i]['obtainmarks'] = $this->input->post('oid'+$i);
			$marks[$i]['date'] = $date;
		}

		$status = $this->staff_model->sendAllMarks($marks);


		$email = $this->session->userdata('username');
		$data['mail']=$email;
		if($status == true){
			$a = array('no'=> 1, 'sucmsg'=>"Marks Sent Successfully!!!");
			$this->load->view('templates/header');
			$this->load->view('templates/staff_nav',$data);
        	$this->load->view('staff_views/sendmark',$a);
        	$this->load->view('templates/footer');
		}
		
	}



}