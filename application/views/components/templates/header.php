<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Header</title>
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">	
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">	
	</head>
	<body>
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="">Zer@Dengue</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarColor01">
				<ul class="navbar-nav mr-auto">
					<li  <?php if($active_tab == 'home') { ?> class="nav-item active" <?php } else { ?> class="nav-item" <?php } ?>>
						<a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
					</li>
					<li  <?php if($active_tab == 'cidadao') { ?> class="nav-item active" <?php } else { ?> class="nav-item" <?php } ?>>
						<a class="nav-link" href="<?php echo base_url(); ?>index.php/Cidadao/">Cadastro de Cidadão</a>
					</li>
					<li  <?php if($active_tab == 'denuncia') { ?> class="nav-item active" <?php } else { ?> class="nav-item" <?php } ?>>
						<a class="nav-link" href="<?php echo base_url(); ?>index.php/Denuncia/">Denúncia</a>
					</li>
					<li  <?php if($active_tab == 'monitoramento') { ?> class="nav-item active" <?php } else { ?> class="nav-item" <?php } ?>>
						<a class="nav-link" href="<?php echo base_url(); ?>index.php/Monitoramento/">Monitoramento de Denúncias</a>
					</li>
					<li  <?php if($active_tab == 'login') { ?> class="nav-item active" <?php } else { ?> class="nav-item" <?php } ?>>
						<a class="nav-link" href="<?php echo base_url(); ?>index.php/Login/">Login</a>
					</li>
				</ul>
				
			</div>
		</nav>
		
	</body>
</html>