<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Zer@Dengue</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	</head>
	<body class="bg-primary">
		<?php
			$dados['active_tab'] = 'login';
			$this->load->view('components/templates/footer');
		?>
		<div class="container">
			<div class="div-login">
				<div class="div-login-child">

					<form action="<?php echo base_url();?>index.php/login" method="POST" >
						<h2>
							Entrar
						</h2> <hr>
						<div class="form-row">
							<div class="form-group col-md-12" data-validate="Por favor digite o email">
								<input class="form-control" type="email" name="email" placeholder="Email">
								<span class=""></span>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12" data-validate = "Por favor digite a senha">
								<input class="form-control" type="password" name="senha" placeholder="Senha">
								<span class="focus-input100"></span>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
								<span class="txt1">
									Esqueceu...
								</span>
								<a href="#" class="txt2">
									Usuário / Senha?
								</a>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
								<button type="submit" class="btn btn-primary">
								Entrar
								</button>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
								<span class="">
									Já possui uma conta?
								</span>
								<a href="#" class="txt3">
									Cadastre agora
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		
	</body>
</html>