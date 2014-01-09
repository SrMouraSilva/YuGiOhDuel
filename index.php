<?php
include_once("template/campo.php");
?>
<!DOCTYPE HTML>
<html lang="pt">
	<head>
		<?php include_once('template/head.php'); ?>

		<script>
		window.onload = (function() {
			$('.card').click(
				(function() {
					$(this).attr('data-animation', 'flip')
						   .attr('data-view', 'front');
						   //.delay(600)
						   //.attr('data-state', 'ataque');
				})
			);
		});
		</script>
	</head>

<body>
	<h1 class="sr-only">Campo de duelo</h1>
	
	<section class="mao" data-owner="oponente">
		<h2 class="sr-only">Mão do oponente</h2>
		<?php include("template/mao.php"); ?>
	</section>


	<section id="campo">
		<section data-owner="oponente">
			<h2 class="sr-only">Campo do oponente</h2>
			<?php magicas(); monstros(); ?>
		</section>

		<section data-owner="voce">
			<h2 class="sr-only">Seu campo</h2>
			<?php monstros(); magicas(); ?>
		</section>
	</section>
	
	<section class="mao" data-owner="sua">
		<h2 class="sr-only">Sua mão</h2>
		<?php include("template/mao.php"); ?>
	</section>
</body>
</html>