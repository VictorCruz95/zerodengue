<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cidadao_model extends CI_Model {

	var $id_cidadao;
	var $nome;
	var $email;
	var $senha;
	var $rg;
	var $cpf;
	var $rua;
	var $numero;
	var $complemento;
	var $bairro;
	var $cidade ;
	var $uf;
	var $telefone ;
	var $cep;
	var $data_inclusao;

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

	public function insert(){
		
	  $post = $this->input->post();

	  $this->nome 		   = $post['nome'];
	  $this->email 		   = $post['email'];
	  $this->senha 		   = $post['senha'];
	  $this->rg 	       = $post['rg'];
	  $this->cpf 		   = $post['cpf'];
	  $this->rua 		   = $post['rua'];
	  $this->numero 	   = $post['numero'];
	  $this->complemento   = $post['complemento'];
	  $this->bairro 	   = $post['bairro'];
	  $this->cidade 	   = $post['cidade'];
	  $this->uf 	   	   = $post['uf'];
	  $this->telefone 	   = $post['telefone'];
	  $this->cep 		   = $post['cep'];
	  $this->data_inclusao = time();

	  $this->db->insert('cidadao', $this);	

	}

	// public function delete()
	// {


}
