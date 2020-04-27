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

	public function getAll()
	{
		$this->load->model('Denuncia_model', 'denuncia');
		$data["records"] = $this->denuncia->getAll();
	}

	public function getById()
	{
		$this->load->model('Denuncia_model', 'denuncia');
		$id = $this->uri->segment(3); // Pega o id informado na URI
		$row = $this->denuncia->getById($id);

		$this->load->view('denuncia', $row);
	}

	public function insert()
	{
		$this->load->model('Denuncia_model', 'denuncia');
		$this->denuncia->insert();
		$this->load->view('monitoramento');
	
	}	
	
}	
