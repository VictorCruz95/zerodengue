<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Monitoramento</title>
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<?php
			$dados['active_tab'] = 'monitoramento'; 
			$this->load->view('templates/header', $dados); 
			// $this->load->view('forms/form-denuncia'); 
			$this->load->view('templates/footer'); 
		?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		
	</body>
</html>