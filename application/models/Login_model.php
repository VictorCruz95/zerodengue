<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function login(){
		$post = $this->input->post();

		$this->load->library('session');

		$userdata = array(
			'email' => $post['email'],
			'id_cidadao' => 1
		);

		$this->session->set_userdata($userdata);

	}
	


}
