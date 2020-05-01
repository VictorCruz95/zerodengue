<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Denuncia extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

    var $msg;

	public function index()
	{				
		// Validações no Form - Utilizar set_value no input para preencher os valores novamente
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$rules = array(
			array(
				'field' => 'rua',
				'label' => 'rua',
				'rules' => 'required',
				'errors' => array(
					'required' => '
						 <div class="alert alert-dismissible alert-danger">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <p>Você deve Informar a Rua.</p>
						</div>')
			),

			array(
				'field' => 'numero',
				'label' => 'numero',
				'rules' => 'required',
				'errors' => array(
					'required' => '
						 <div class="alert alert-dismissible alert-danger">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <p>Você deve Informar o número.</p>
						</div>')
			),

			array(
				'field' => 'bairro',
				'label' => 'bairro',
				'rules' => 'required',
				'errors' => array(
					'required' => '
						 <div class="alert alert-dismissible alert-danger">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <p>Você deve Informar o bairro.</p>
						</div>')
			),

			array(
				'field' => 'cidade',
				'label' => 'cidade',
				'rules' => 'required',
				'errors' => array(
					'required' => '
						 <div class="alert alert-dismissible alert-danger">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>						 
						  <p>Você deve Informar a cidade.</p>
						</div>')
			),

			array(
				'field' => 'cep',
				'label' => 'cep',
				'rules' => 'required',
				'errors' => array(
					'required' => '
						 <div class="alert alert-dismissible alert-danger">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <p>Você deve Informar o cep.</p>
						</div>')
			)

		);

		$this->form_validation->set_rules($rules);
		
		if ($this->form_validation->run() == FALSE){
            $this->load->view('denuncia');
        }
        else{

            $id_denuncia = $this->insert();


            if (!empty($id_denuncia)){

				if (!$this->upload_imagem($id_denuncia)){
					
					$dados = array(
						'mensagem' => $msg
					);	

					$this->load->view('denuncia', $dados);					
				}	

			}
			else{							
				$dados = array(
					'mensagem' => 'Não foi possível gravar a denuncia. Tente novamente.' 
				);	
				$this->load->view('denuncia', $dados);

        	}
        	
        	$this->load->view('monitoramento');

		}

	}	

	public function upload_imagem($id_denuncia)
	{

	  	if (!empty($_FILES)){

	  		$imagem = $_FILES['imagem'];

		    if(file_exists($imagem['name']) || is_uploaded_file($imagem['tmp_name'])){

		  		$configuracao = array(
			  		'upload_path' => './imagens_denuncia/',
			  		'allowed_types' => 'gif|jpg|png',
			  		'file_name'     => $id_denuncia,
			  		'max_size'      => '2000'
			  		);

			  	$this->load->library('upload');
			  	$this->upload->initialize($configuracao);

			    if ($this->upload->do_upload('imagem')){
			     	return TRUE;
			    }
			 	else{
			 		$msg = $this->upload->display_errors();			 		
			     	return FALSE;
				 }	
			}  

	  	}

	  	return TRUE;	
	}

	public function insert()
	{
		$this->load->model('Denuncia_model', 'denuncia');
		$id_denuncia = $this->denuncia->insert();
		return $id_denuncia;
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

}	
