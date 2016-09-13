<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice_Model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}


	//This method returns the Notifications or notices
	public function getnotice($nid)
	{
		$query = $this->db->get_where('notification', array('nid' => $nid));
		return $query;			
	}


}