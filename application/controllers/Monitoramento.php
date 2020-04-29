<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoramento extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{				
		$this->getAll();
	}

	public function getAll()
	{
		$this->load->model('Monitoramento_model', 'monitoramento');
		$data["records"] = $this->monitoramento->getAll();
		$this->load->view('monitoramento', $data);
	}

	public function consultar()
	{
		$get = $this->input->get(); 

		$this->load->model('Monitoramento_model', 'monitoramento');
		$data["records"] = $this->monitoramento->getCustom($get['id_denuncia'], $get['rg']);
		$this->load->view('monitoramento', $data);
	}

}
