<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoramento_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function getAll(){
		$query = $this->db->query("
				SELECT c.nome as nome_cidadao
					  ,d.id_denuncia
				      ,d.rua
				      ,d.numero
				      ,d.complemento
				      ,d.bairro
				      ,d.cidade
				      ,d.uf
				      ,d.status as status_denuncia
				      ,d.data as data_denuncia      
				  FROM cidadao c
					  ,denuncia d
				 WHERE c.id_cidadao = d.id_cidadao
			   ORDER BY c.nome
					   ,d.id_denuncia       
				");

		return $query;
	}

	function getCustom($id){
		$query = $this->db->select("*");
		$query = $this->db->from("denuncia");
		$query = $this->db->where("id_denuncia", $id);
		$query = $this->db->get()->row();

		return $query;
	}
	


}
