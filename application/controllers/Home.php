<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{				
		// print_r($this->session->all_userdata());
		$this->load->view('home');

	}

}
