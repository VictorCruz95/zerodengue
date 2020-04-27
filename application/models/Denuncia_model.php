<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Denuncia_model extends CI_Model {

	var $id_denuncia;
	var $id_cidadao;
	var $descricao;
	var $acao_tomada;
	var $status;
	var $rua;
	var $numero;
	var $complemento;
	var $bairro;
	var $cidade;
	var $cep;
	var $uf;
	var $data;

	function __construct(){
		parent::__construct();
	}

	function getAll(){
		$query = $this->db->get("denuncia");
		return $query;
	}

	function getById($id){
		$query = $this->db->select("*");
		$query = $this->db->from("denuncia");
		$query = $this->db->where("id_denuncia", $id);
		$query = $this->db->get()->row();

		return $query;
	}
	

	public function insert(){
		
	  $post = $this->input->post();

	  $this->id_cidadao    = "1";
	  $this->descricao 	   = $post['descricao'];
	  $this->status 	   = "A";
	  $this->rua 		   = $post['rua'];
	  $this->numero 	   = $post['numero'];
	  $this->complemento   = $post['complemento'];
	  $this->bairro 	   = $post['bairro'];
	  $this->cidade 	   = $post['cidade'];
	  $this->uf 	   	   = $post['uf'];
	  $this->cep 		   = $post['cep'];
	  $this->data = time();

	  $this->db->insert('denuncia', $this);	

	}

	// public function delete()
	// {


}
