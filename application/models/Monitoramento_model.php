<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoramento_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function getAll(){
		$query = $this->db->query("
				SELECT UPPER(c.nome) as nome_cidadao
					  ,d.id_denuncia
					  ,UPPER(d.descricao) as descricao
				      ,UPPER(d.rua) as rua
				      ,d.numero
				      ,UPPER(d.complemento) as complemento
				      ,UPPER(d.bairro) as bairro
				      ,UPPER(d.cidade) as cidade
				      ,d.uf
				      ,d.imagem
				      ,case d.status
				        when 'A' then 'ABERTO'
				        when 'V' then 'EM VERIFICAÇÃO'
				        when 'F' then 'FINALIZADO'
				        when 'C' then 'CANCELADO'
				       end as status_denuncia
				      ,date_format(data,'%d/%m/%Y')as data_denuncia      
				  FROM cidadao c
					  ,denuncia d
				 WHERE c.id_cidadao = d.id_cidadao
			   ORDER BY c.nome
					   ,d.id_denuncia       
				");

		return $query;
	}

	function getCustom($id_denuncia, $rg){
		
		$this->db->select("
					UPPER(cidadao.nome) as nome_cidadao
					  ,denuncia.id_denuncia
					  ,UPPER(denuncia.descricao) as descricao
				      ,UPPER(denuncia.rua) as rua
				      ,denuncia.numero
				      ,UPPER(denuncia.complemento) as complemento
				      ,UPPER(denuncia.bairro) as bairro
				      ,UPPER(denuncia.cidade) as cidade
				      ,denuncia.uf
				      ,denuncia.imagem
				      ,case denuncia.status
				        when 'A' then 'ABERTO'
				        when 'V' then 'EM VERIFICAÇÃO'
				        when 'F' then 'FINALIZADO'
				        when 'C' then 'CANCELADO'
				       end as status_denuncia
				      ,date_format(denuncia.data,'%d/%m/%Y')as data_denuncia", FALSE);
	    
	    $this->db->from('denuncia');
	    $this->db->join('cidadao', 'denuncia.id_cidadao = cidadao.id_cidadao', 'inner');
	    
	    if (!empty($id)){
	    	$this->db->where('rg', $rg);
	    }
	    
	    if (!empty($id_denuncia)){
	    	$this->db->where('id_denuncia', $id_denuncia);
	    }

	    $this->db->order_by('id_denuncia', 'desc');
	    $query = $this->db->get();

		return $query;
	}

}
