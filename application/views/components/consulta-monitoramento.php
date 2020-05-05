<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- <style>
		.table-container-top{
			position: absolute;
			margin-top: 15%;
			width: 100%;
		}
	</style> -->
</head>
	<body>
	<!-- 	<div class="table-container-top"> -->
			<div class="table-container">
				<table class="table table-striped table-inverse table-hover table-responsive">
					<thead class="table-primary">
						<tr>
							<th style="width:10%">ID Denuncia</th>
							<th style="width:100%">Nome Cidadao</th>
							<th style="width:100%">Rua</th>
							<th style="width:100%">Nº</th>
							<th style="width:100%">Compl.</th>
							<th style="width:100%">Bairro</th>
							<th style="width:100%">Cidade</th>
							<th style="width:100%">UF</th>
							<th style="width:100%">Status</th>
							<th style="width:100%">Data</th>
							<th style="width:100%">Imagem</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if ($records->num_rows() > 0){
						foreach ($records->result() as $row) {
						?>
						<tr class="table-light">
							<td><?php echo $row->id_denuncia; ?></td>
							<td><?php echo $row->nome_cidadao; ?></td>
							<td><?php echo $row->rua; ?></td>
							<td><?php echo $row->numero; ?></td>
							<td><?php echo $row->complemento; ?></td>
							<td><?php echo $row->bairro; ?></td>
							<td><?php echo $row->cidade; ?></td>
							<td><?php echo $row->uf; ?></td>
							<td><?php echo $row->status_denuncia; ?></td>
							<td><?php echo $row->data_denuncia; ?></td>
							<td><img class="imagem" src="<?php echo $row->imagem; ?>"></img> </td>
						</tr>
						<?php
						}
						}
						else{
						?>
						<tr>
							<td colspan="11">A consulta não retornou registros.</td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
	<!-- 	</div> -->
	</body>
</html>