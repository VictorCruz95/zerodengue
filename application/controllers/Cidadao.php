<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cidadao extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{				
		$this->load->view('cidadao');
	}

	public function getAll()
	{
		$this->load->model('Cidadao_model', 'cidadao');
		$data["records"] = $this->cidadao->getAll();
	}

	public function getById()
	{
		$this->load->model('Cidadao_model', 'cidadao');
		$id = $this->uri->segment(3); // Pega o id informado na URI
		$row = $this->cidadao->getById($id);

		$this->load->view('cidadao', $row);
	}

	public function insert()
	{
		$this->load->model('Cidadao_model', 'cidadao');
		$this->cidadao->insert();
		$this->load->view('monitoramento');
	
	}	
	
}	
