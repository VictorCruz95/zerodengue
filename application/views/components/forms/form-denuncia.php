<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
	<body>
		<br>
		<div class="" style="margin-left: 20px; height: 200px; width: 100%;">
			<div class="form">
				<h1>Realizar nova Denúncia</h1>
				<hr>				
				<!-- Mostra as mensagens de validação do form -->
				<?php 
				echo validation_errors(); 

				if (!empty($mensagem)){
					echo '<div class="alert alert-dismissible alert-danger">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <p>' .$mensagem.'</p>
						</div>';
				}

				?>

				<form action="<?php echo base_url();?>index.php/Denuncia" method="POST" enctype="multipart/form-data">
					<div class="form-row">
						<legend class="col-md-8">Endereço da Ocorrência</legend>
						<div class="form-group col-md-8">
							<label for="rua" class="col-sm-2 col-form-label">Rua</label>
							<input type="text" class="form-control text-uppercase" name="rua" value="<?php echo set_value('rua'); ?>">						
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="numero" class="col-sm-2 col-form-label">Nº</label>
							<input type="text" class="form-control text-uppercase" name="numero" value="<?php echo set_value('numero'); ?>">
						</div>
						
						<div class="form-group col-md-6">
							<label for="complemento" class="col-sm-2 col-form-label">Complemento</label>
							<input type="text" class="form-control text-uppercase" name="complemento" size="30" value="<?php echo set_value('complemento'); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="bairro" class="col-sm-2 col-form-label">Bairro</label>
							<input type="text" class="form-control text-uppercase" name="bairro" value="<?php echo set_value('bairro'); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="cidade" class="col-sm-2 col-form-label">Cidade</label>
							<input type="text" class="form-control text-uppercase" name="cidade" value="<?php echo set_value('cidade'); ?>">
						</div>
						
						<div class="form-group col-md-2">
							<label for="nome" class="col-sm-2 col-form-label">UF</label>
							<select class="form-control" name="uf" style="font-size: 16px;" value="<?php echo set_value('uf'); ?>">
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
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="cep" class="col-sm-2 col-form-label">CEP</label>
							<input type="text" class="form-control" name="cep" placeholder="Seu CEP. Exemplo: 93800-000" value="<?php echo set_value('cep'); ?>">
						</div>
					</div>
					</br>
					<legend class="col-md-8">Informações Adicionais</legend>
					<div class="form-group col-md-8">
						<label for="descricao">Descrição da Denúncia</label>
						<textarea class="form-control text-uppercase" name="descricao" rows="2" value="<?php echo set_value('descricao'); ?>"></textarea>
					</div>
					
					<div class="form-group col-md-8">
						<div class="file-upload-wrapper">
							<label for="foto">Upload de Imagem</label>
							<input type="file" name="imagem" class="file-upload" accept="image/png, image/jpeg" />
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block col-md-8">Cadastrar Denúncia</button>
				</form>
			</div>
		</div>
		
	</body>
</html>