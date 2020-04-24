<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Denuncia extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{				
		$this->load->view('denuncia');
	}

	
	public function insert()
	{
		$this->load->model('Denuncia_model');
		// $this->Denuncia_model->inserir();
	}

}
