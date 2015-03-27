<div class="contform">
<h1>Recuperación de contraseña.</h1>
<p>Por favor, introduce tu e-mail para restablecer tu contraseña.</p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password", array('class'=>'pure-form pure-form-stacked'));?>
<legend></legend>
      	<label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label>
      	<?php echo form_input($email);?>
        <?php echo form_submit(array('type'=>'submit', 'value'=>'Enviar', 'class'=>'pure-button pure-button-primary pure-input-1'));?>
<?php echo form_close();?>
        <br>
        <a href="<?php echo site_url('/') ?>">Inicio</a>
</div>