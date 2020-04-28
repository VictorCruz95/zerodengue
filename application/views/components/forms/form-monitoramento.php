<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
	<body>
		<br>
		<div class="container">
			<h1 style="text-align: center">Colsulta Situação de Denúncias</h1><hr>
			<div class="form form_">
				<form action="<?php echo base_url();?>index.php/Monitoramento/" method="GET">
					<div class="form-row">
						<legend class="col-md-12">Dados Denúncia</legend>
						<div class="form-group col-md-6">
							<label for="nome"  class="col-sm-6 col-form-label">RG</label>
							<input type="text" class="form-control"name="rg" placeholder="" value="<?php echo (!empty($rg) ? $rg : ""); ?>">
						</div>
						<div class="form-group col-md-6">
							<label for="nome"  class="col-sm-6 col-form-label">ID Denúncia</label>
							<input type="text" class="form-control"name="id_denuncia" placeholder="" value="<?php echo (!empty($id_denuncia) ? $id_denuncia : ""); ?>">
						</div>
						
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
						<button type="submit" class="btn btn-primary col-md-12">Consultar</button>
					</div>
					</div>
				</div>
				
			</form>
		</div>
	</div>
	
	
</body>
</html>