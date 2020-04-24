<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Zer@Dengue</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" >
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	</head>
	<body>
		<?php
			$dados['active_tab'] = 'home'; 
			$this->load->view('templates/header', $dados); 
		?>
		
		<div class="container">
			<div class="jumbotron">
				<h1 class="display-3">Faça a sua parte, Denuncie!</h1>
				
				<p class="lead">Se você souber de algum local que não esteja observando as orientações de prevenção contra a dengue, denuncie à Secretaria de Saúde de sua cidade. Combater a dengue é dever de todos!</p>
				<hr class="my-4">
				<p>O vírus da dengue é transmitido pela picada da fêmea do Aedes aegypti, um mosquito diurno
					que se multiplica em depósitos de água parada acumulada nos quintais e dentro das casas.
					Existem quatro tipos diferentes desse vírus: os sorotipos 1, 2, 3 e 4. Todos podem causar as diferentes
				formas da doença.</p>
				
				<p>Em alguns casos, a ausência de sintomas faz com que a doença passe despercebida; em
					outros, ocorrem complicações graves que podem levar a óbito. Essas diferenças marcam as
				diferentes apresentações da doença: clássica, hemorrágica e com complicações.</p>
				
			</div>
		</div>
		<div class="container box">
			<a style="display:block" href="<?php echo base_url(); ?>index.php/Cidadao/">
				<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Cadastro de Cidadão</div>
					<div class="card-body">
						<p class="card-text">Faça seu cadastro para ter acesso ao portal e realizar denuncias</p>
					</div>
				</div>
			</a>
			
			<a style="display:block" href="<?php echo base_url(); ?>index.php/Denuncia/">
				<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
					<div class="card-header">Criar nova Denúncia</div>
					<div class="card-body">
						<p class="card-text">Se você encontrou algum foco de Dengue, faça sua denuncia.</p>
					</div>
				</div>
			</a>
			<a style="display:block" href="<?php echo base_url(); ?>index.php/Monitoramento/">
				<div class="card text-white bg-info mb-3" style="max-width: 20rem;">
					<div class="card-header">Monitorar Denúncias</div>
					<div class="card-body">
						<p class="card-text">Consulte aqui situação em tempo real das denuncias feitas.</p>
					</div>
				</div>
			</a>
			
		</div>
		
		
		<?php $this->load->view('templates/footer'); ?>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	</body>
</html>