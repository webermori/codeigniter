<?php $this->load->view('partials/_head'); ?>
<?php $this->load->view('partials/_header'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h1>Fale Conosco</h1>
				
				<?php if ($formerror):
					echo '<p>'.$formerror.'</p>';	
				endif ?>
			
				<?php echo form_open('pagina/contato');	?>
				<div class="form-group">
					<?php echo form_label('Seu nome:', 'nome', array('class'=>'form-weber'));	?>
					<?php echo form_input('nome', set_value('nome'));	?>
				</div>

				<div class="form-group">
					<?php echo form_label('Seu email:', 'email');	?>
					<?php echo form_input('email', set_value('email'));	?>
				</div>

				<div class="form-group">
					<?php echo form_label('Assunto:', 'assunto');	?>
					<?php echo form_input('assunto', set_value('assunto'));	?>
				</div>

				<div class="form-group">
					<?php echo form_label('Mensagem:', 'mensagem');	?>
					<?php echo form_textarea('mensagem', set_value('mensagem'));	?>
				</div>

				<?php echo form_submit('enviar', 'Enviar', array('class'=>'btn btn-primary'));	?>

				<?php echo form_close();	?> 
		
		</div>

		<div class="col-md-3">
			sidebar
		</div>
	</div>
	
</div>
<?php $this->load->view('partials/_footer.php'); ?>
