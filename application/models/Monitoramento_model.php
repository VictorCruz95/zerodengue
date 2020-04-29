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

	function getCustom($id_denuncia, $rg){
		$sql = "SELECT c.nome as nome_cidadao
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
				   AND c.rg = NVL(?, c.rg)
				   AND d.id_denuncia = NVL(?, d.id_denuncia)
			   ORDER BY c.nome
					   ,d.id_denuncia";

	$query = $this->db->query($sql, [
							'rg' => $rg,
							'id_denuncia' => $id_denuncia
						]);


		return $query;
	}
	


}
