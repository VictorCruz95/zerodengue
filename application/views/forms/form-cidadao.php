<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
	<body>
		<div style="margin-left: 20px; height: 200px; width: 100%;">
			<div class="form">
				<h1>Cadastro de Cidadão</h1></br>
				<form action="<?php echo base_url();?>index.php/Cidadao/insert" method="POST">
					<div class="form-row">
						<legend class="col-md-8">Dados Pessoais</legend>
						<div class="form-group col-md-8">
							<label for="nome"  class="col-sm-2 col-form-label">Nome</label>
							<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="email"  class="col-sm-2 col-form-label">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="senha" class="col-sm-2 col-form-label">Senha</label>
							<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="rg" class="col-sm-2 col-form-label">RG</label>
							<input type="text" class="form-control" id="rg" name="rg" placeholder="Seu RG. Exemplo: 9999999999">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="cpf" class="col-sm-2 col-form-label">CPF</label>
							<input type="text" class="form-control" id="cpf" name="cpf" placeholder="Seu CPF. Exemplo: 022.222.222-09" onkeypres="my_function()">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="telefone" class="col-sm-2 col-form-label">Telefone</label>
							<input type="text" class="form-control" id="telefone" name="telefone" placeholder="">
						</div>
					</div>
					
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="cep" class="col-sm-2 col-form-label">CEP</label>
							<input type="text" class="form-control" id="cep" name="cep" placeholder="Seu CEP. Exemplo: 93800-000">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="rua" class="col-sm-2 col-form-label">Rua</label>
							<input type="text" class="form-control" id="rua" name="rua" placeholder="">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="numero" class="col-sm-2 col-form-label">Nº</label>
							<input type="text" class="form-control" id="numero" name="numero" placeholder="">
						</div>
						
						<div class="form-group col-md-6">
							<label for="complemento" class="col-sm-2 col-form-label">Complemento</label>
							<input type="text" class="form-control" id="complemento" name="complemento" size="30" placeholder="">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="bairro" class="col-sm-2 col-form-label">Bairro</label>
							<input type="text" class="form-control" id="bairro" name="bairro" placeholder="">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="cidade" class="col-sm-2 col-form-label">Cidade</label>
							<input type="text" class="form-control" id="cidade" name="cidade" placeholder="">
						</div>
						
						<div class="form-group col-md-2">
							<label for="uf" class="col-sm-2 col-form-label">UF</label>
							<select class="form-control select_" id="uf" name="uf">
								<option class="select" value="AC">Acre</option>
								<option value="AL">Alagoas</option>
								<option value="AP">Amapá</option>
								<option value="AM">Amazonas</option>
								<option value="BA">Bahia</option>
								<option value="CE">Ceará</option>
								<option value="DF">Distrito Federal</option>
								<option value="ES">Espírito Santo</option>
								<option value="GO">Goiás</option>
								<option value="MA">Maranhão</option>
								<option value="MT">Mato Grosso</option>
								<option value="MS">Mato Grosso do Sul</option>
								<option value="MG">Minas Gerais</option>
								<option value="PA">Pará</option>
								<option value="PB">Paraíba</option>
								<option value="PR">Paraná</option>
								<option value="PE">Pernambuco</option>
								<option value="PI">Piauí</option>
								<option value="RJ">Rio de Janeiro</option>
								<option value="RN">Rio Grande do Norte</option>
								<option value="RS">Rio Grande do Sul</option>
								<option value="RO">Rondônia</option>
								<option value="RR">Roraima</option>
								<option value="SC">Santa Catarina</option>
								<option value="SP">São Paulo</option>
								<option value="SE">Sergipe</option>
								<option value="TO">Tocantins</option>
								<option value="EX">Estrangeiro</option>
							</select>
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block col-md-8">Cadastrar Cidadão</button>
				</form>
			</div>
		</div>
		
	</body>
</html>