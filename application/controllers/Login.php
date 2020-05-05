<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{				
		$this->load->view('login');
	}	

	public function login() 
	{	
		$post = $this->input->post();

		$userdata = array(
			'email' => $post['email'],
			'id_cidadao' => 1,
			'logged' => TRUE
		);

		$this->session->set_userdata($userdata);
		redirect('Home');

	}
}
