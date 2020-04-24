<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cidadao_model extends CI_Model {

	private $id;
	private $nome;
	private $email;
	private $senha;
	private $rg;
	private $cpf;
	private $rua;
	private $numero;
	private $complemento;
	private $bairro;
	private $cidade ;
	private $uf;
	private $telefone ;
	private $cep;
	private $data_inclusao;

	function __construct(){
		parent::__construct();
	}

	// public function getAll()
	// {
	// 	$query = $this->db->('cidadao');
	// 	return $query->result();
	// }

	// public function getById()
	// {
	// 	$query = $this->db->('cidadao');
	// 	return $query->result();
	// }

	public function insert($data){
		  
	  $this->id 		   = $data['id'];
	  $this->nome 		   = $data['nome'];
	  $this->email 		   = $data['email'];
	  $this->senha 		   = $data['senha'];
	  $this->rg 	       = $data['rg'];
	  $this->cpf 		   = $data['cpf'];
	  $this->rua 		   = $data['rua'];
	  $this->numero 	   = $data['numero'];
	  $this->complemento   = $data['complemento'];
	  $this->bairro 	   = $data['bairro'];
	  $this->cidade 	   = $data['cidade'];
	  $this->uf 	   	   = $data['uf'];
	  $this->telefone 	   = $data['telefone'];
	  $this->cep 		   = $data['cep'];
	  $this->data_inclusao = time();

	  $builder->insert('cidadao', $data);	

	}

	// public function delete()
	// {


}
