<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titulo ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/painel.css') ?>">
</head>
<body>
	<div class="columns">
		<div class="column is-4">&nbsp;</div>
		<div class="column is-4">
			<h2 class="title "><?php echo $h2 ?></h2>

			<?php 
				if ($msg = get_msg()):
					echo '<div class="message is-danger"><div class="message-body">'.$msg.'</div></div>';
				endif;
			echo form_open(); ?>
			<div class="field">
				<label class="label"><?php echo form_label('Nome para Login:','login'); ?></label>
				<div class="control">
					<?php echo form_input('login', set_value('login'), array('autofocus'=>'autofocus', 'class'=>'input')); ?>
				</div>
			</div>

			<div class="field">
				<label class="label"><?php echo form_label('E-mail do adminstrador:','email'); ?></label>
				<div class="control">
					<?php echo form_input('email', set_value('email'), array('class'=>'input')); ?>
				</div>
			</div>

			<div class="field">
				<label class="label"><?php echo form_label('Senha:','senha'); ?></label>
				<div class="control">
					<?php echo form_password('senha', set_value('senha'), array('class'=>'input')); ?>
				</div>
			</div>

			<div class="field">
				<label class="label"><?php echo form_label('Repita a senha:','senha2'); ?></label>
				<div class="control">
					<?php echo form_password('senha2', set_value('senha2'), array('class'=>'input')); ?>
				</div>
			</div>

			<div class="control">
			  <?php echo form_submit('envia', 'Salvar dados', array('class' => 'button is-primary')); ?>
			</div>

			<?php echo form_close(); ?>
		</div>
		<div class="column is-4">&nbsp;</div>
	</div>		
</body></html>
