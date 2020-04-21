<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Form Denuncia</title>
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	</head>
	<body>
		
		<div class="form_" style="margin-left: 20px; height: 200px; width: 100%;">
			<div class="form">
				<h1>Realizar nova Denúncia</h1> </br>
				<form>
					<div class="form-row">
						<legend class="col-md-8">Endereço da Ocorrência</legend>
						<div class="form-group col-md-8">
							<label for="nome" class="col-sm-2 col-form-label">Rua</label>
							<input type="text" class="form-control" id="nome" placeholder="">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="nome" class="col-sm-2 col-form-label">Nº</label>
							<input type="text" class="form-control" id="nome" placeholder="">
						</div>
						
						<div class="form-group col-md-6">
							<label for="nome" class="col-sm-2 col-form-label">Complemento</label>
							<input type="text" class="form-control" id="nome" size="30" placeholder="">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="nome" class="col-sm-2 col-form-label">Bairro</label>
							<input type="text" class="form-control" id="nome" placeholder="">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nome" class="col-sm-2 col-form-label">Cidade</label>
							<input type="text" class="form-control" id="nome" placeholder="">
						</div>
						
						<div class="form-group col-md-2">
							<label for="nome" class="col-sm-2 col-form-label">UF</label>
							<input type="text" class="form-control" id="nome" placeholder="">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="nome" class="col-sm-2 col-form-label">CEP</label>
							<input type="text" class="form-control" id="nome" placeholder="Seu CEP. Exemplo: 93800-000">
						</div>
					</div>
					</br>
					<legend class="col-md-8">Informações Adicionais</legend>
					<div class="form-group col-md-8">
						<label for="descricao">Descrição da Denúncia</label>
						<textarea class="form-control" id="descricao" rows="5"></textarea>
					</div>
					
					<div class="form-group col-md-8">
						<div class="file-upload-wrapper">
							<label for="descricao">Upload de Imagem</label>
							<input type="file" id="imagem" class="file-upload" accept="image/png, image/jpeg" />
						</div>
					</div>
					<button type="button" class="btn btn-primary btn-lg btn-block col-md-8">Cadastrar Denúncia</button>
				</form>
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		
	</body>
</html>