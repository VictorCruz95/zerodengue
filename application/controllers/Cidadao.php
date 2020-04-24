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
		$this->load->model('Cidadao_model');
		$data[records] = $this->Cidadao_model->getAll();

		$this->load->view('cidadao', $data);
	}

	public function getById()
	{
		$this->load->model('Cidadao_model');
		$data[records] = $this->Cidadao_model->getById();

		$this->load->view('cidadao', $data);
	}

	public function insert()
	{
		$data = $this->input->post();
		$this->load->model('Cidadao_model');
		$this->Cidadao_model->insert($data);
	
	}

	public function delete()
	{

	}
	
}	
