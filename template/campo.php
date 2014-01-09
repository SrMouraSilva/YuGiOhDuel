<?php function monstros() { ?>
<section class="cartas monstros">
	<h3 class="sr-only">Monstros</h3>

	<ul>
		<?php for($cont=0; $cont<5; $cont++) { ?>
		<li class="container">
			<div class="card" data-state="defesa" data-view="back" data-animation="invoke">
				<img src="stc/img/941.jpg" alt="Defense: Blue-Eyes White Dragon" />
			</div>
		</li>
		<?php } ?>
	</ul>
</section>
<?php } ?>

<?php function magicas() { ?>
<section class="cartas magicas">
	<h3 class="sr-only">Mágicas e armadilhas</h3>
	<ul>
		<?php for($cont=0; $cont<5; $cont++) { ?>
		<li class="container">
			<div class="card" data-view="back" data-animation="invoke">
				<img src="stc/img/7694.jpg" alt="Magic: E - Emergency Hero" />
			</div>
		</li>
		<?php } ?>
	</ul>
</section>
<?php } ?>