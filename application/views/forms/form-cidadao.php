<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Form Cidadao</title>
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	</head>
	<body>
		
		<div class="form_" style="margin-left: 20px; height: 200px; width: 100%;">
			<div class="form">				
				<h1>Cadastro de Cidadão</h1></br>
				<form>									
					<div class="form-row">
						<legend class="col-md-8">Dados Pessoais</legend>	
						<div class="form-group col-md-8">
							<label for="nome"  class="col-sm-2 col-form-label">Nome</label>
							<input type="text" class="form-control" id="nome" placeholder="Nome Completo">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="email"  class="col-sm-2 col-form-label">Email</label>
							<input type="email" class="form-control" id="email" placeholder="name@example.com">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="senha" class="col-sm-2 col-form-label">Senha</label>
							<input type="password" class="form-control" id="senha" placeholder="Senha">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="nome" class="col-sm-2 col-form-label">RG</label>
							<input type="text" class="form-control" id="nome" placeholder="Seu RG. Exemplo: 9999999999">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="nome" class="col-sm-2 col-form-label">CPF</label>
							<input type="text" class="form-control" id="nome" placeholder="Seu CPF. Exemplo: 022.222.222-09">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="nome" class="col-sm-2 col-form-label">Telefone</label>
							<input type="text" class="form-control" id="nome" placeholder="">
						</div>
					</div>
					
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="nome" class="col-sm-2 col-form-label">CEP</label>
							<input type="text" class="form-control" id="nome" placeholder="Seu CEP. Exemplo: 93800-000">
						</div>
					</div>
					<div class="form-row">
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

					<button type="button" class="btn btn-primary btn-lg btn-block col-md-8">Cadastrar Cidadão</button>

				</form>
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		
	</body>
</html>