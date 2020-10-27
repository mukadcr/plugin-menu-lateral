<div class="wrap">
	<h1>Configurações do menu lateral</h1>
	<form method="post" action="options.php">
		<?php
			settings_fields('configs-plugin-menu');
			do_settings_sections('configs-plugin-menu');
		?>
		<label for="nome-autorh">Nome autor</label>
		<input type="text" id="nome-autor" name="nome-autor" value="<?php echo get_option('nome-autor');?>"><br><br>

		<label for="descricao-plugin">Descrição do plugin</label>
		<input type="text" id="descricao-plugin" name="descricao-plugin" value="<?php echo get_option('descricao-plugin');?>"><br><br>

		<label for="data-cricao">Data: </label>
		<input type="text" id="data-cricao" name="data-cricao" value="<?php echo get_option('data-cricao');?>"><br><br>

		<?php
			submit_button();
		?>
	</form>

</div>