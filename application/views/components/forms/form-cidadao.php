<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
	<body>
		<br>
		<div style="margin-left: 20px; height: 200px; width: 100%;">
			<div class="form">
				<h1>Cadastro de Cidadão</h1><hr>
				<form action="<?php echo base_url();?>index.php/Cidadao/insert" method="POST">
					<div class="form-row">
						<legend class="col-md-8">Dados Pessoais</legend>
						<div class="form-group col-md-8">
							<label for="nome"  class="col-sm-2 col-form-label">Nome</label>
							<input type="text" class="form-control"name="nome" placeholder="Nome Completo" value="<?php echo (!empty($nome) ? $nome : ""); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="email"  class="col-sm-2 col-form-label">Email</label>
							<input type="email" class="form-control" name="email" placeholder="name@example.com" value="<?php echo (!empty($email) ? $email : ""); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="senha" class="col-sm-2 col-form-label">Senha</label>
							<input type="password" class="form-control" name="senha" placeholder="Senha" value="<?php echo (!empty($senha) ? $senha : ""); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="rg" class="col-sm-2 col-form-label">RG</label>
							<input type="text" class="form-control" name="rg" placeholder="Seu RG. Exemplo: 9999999999" value="<?php echo (!empty($rg) ? $rg : ""); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="cpf" class="col-sm-2 col-form-label">CPF</label>
							<input type="text" class="form-control" name="cpf" placeholder="Seu CPF. Exemplo: 022.222.222-09" value="<?php echo (!empty($cpf) ? $cpf : ""); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="telefone" class="col-sm-2 col-form-label">Telefone</label>
							<input type="text" class="form-control" name="telefone" placeholder="" value="<?php echo (!empty($telefone) ? $telefone : ""); ?>">
						</div>
					</div>
					
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="cep" class="col-sm-2 col-form-label">CEP</label>
							<input type="text" class="form-control" name="cep" placeholder="Seu CEP. Exemplo: 93800-000" value="<?php echo (!empty($cep) ? $cep : ""); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="rua" class="col-sm-2 col-form-label">Rua</label>
							<input type="text" class="form-control" name="rua" placeholder="" value="<?php echo (!empty($rua) ? $rua : ""); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="numero" class="col-sm-2 col-form-label">Nº</label>
							<input type="text" class="form-control" name="numero" placeholder="" value="<?php echo (!empty($numero) ? $numero : ""); ?>">
						</div>
						
						<div class="form-group col-md-6">
							<label for="complemento" class="col-sm-2 col-form-label">Complemento</label>
							<input type="text" class="form-control" name="complemento" size="30" placeholder="" value="<?php (!empty($complemento) ? $complemento : ""); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="bairro" class="col-sm-2 col-form-label">Bairro</label>
							<input type="text" class="form-control"  name="bairro" placeholder="" value="<?php echo (!empty($bairro) ? $bairro : ""); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="cidade" class="col-sm-2 col-form-label">Cidade</label>
							<input type="text" class="form-control" name="cidade" placeholder="" value="<?php echo (!empty($cidade) ? $cidade : ""); ?>">
						</div>
						
						<div class="styled-select col-md-2">
							<label for="uf" class="col-sm-2 col-form-label">UF</label>
							<select class="form-control" name="uf" style="font-size: 16px;" value="<?php echo (!empty($uf) ? $uf : ""); ?>">
								<option value="AC">Acre</option>
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