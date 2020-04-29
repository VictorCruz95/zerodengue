<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
	<body>
		<div class="table-container">
			<table class="table table-striped table-inverse table-hover">
				<thead class="table-primary">
					<tr>
						<th>ID Denuncia</th>
						<th>Nome Cidadao</th>
						<th>Rua</th>
						<th>Nº</th>
						<th>Compl.</th>
						<th>Bairro</th>
						<th>Cidade</th>
						<th>UF</th>
						<th>Status</th>
						<th>Data</th>
						<th>Imagem</th>
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
						<td></td>
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
	</body>
</html>