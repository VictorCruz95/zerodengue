<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Zer@Dengue</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	</head>
	<body>
		<?php
			$dados['active_tab'] = 'monitoramento';
			$this->load->view('components/templates/header', $dados);			
			$this->load->view('components/forms/form-monitoramento');
			$this->load->view('components/consulta-monitoramento');			
			$this->load->view('components/templates/footer');
		?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		
	</body>
</html>