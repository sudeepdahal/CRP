<?php 
   class ResetPass extends CI_Controller { 
 
      function __construct() { 
         parent::__construct(); 
         $this->load->library('session'); 
         $this->load->helper('form'); 
      } 
		
      public function index() { 
	
         $this->load->view('templates/header');
         $this->load->view('forget_password');
         $this->load->view('templates/footer'); 
      } 
  
      public function send_mail() { 
         $from_email = "your@example.com"; 
         $to_email = $this->input->post('email');
         $pass = $this->input->post('password'); 
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Your Name'); 
         $this->email->to($to_email);
         $this->email->subject('Email Test'); 
         $this->email->message('Testing the email class.'); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         $this->load->view('email_form'); 
      } 
   } 
?>