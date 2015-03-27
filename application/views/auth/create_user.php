<div class="contform">
<h1>Registro</h1>
<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_user", array('class'=>'pure-form pure-form-stacked'));?>
<legend>
    
</legend>
            <?php echo form_label('Nombre:') ?>
            <?php echo form_input($first_name);?>

            <?php echo form_label('Apellido:') ?>
            <?php echo form_input($last_name);?>

            <?php echo form_label('Compañia:') ?>
            <?php echo form_input($company);?>

            <?php echo form_label('Email:') ?>
            <?php echo form_input($email);?>

            <?php echo form_label('Teléfono:') ?>
            <?php echo form_input($phone);?>

            <?php echo form_label('Contraseña:') ?>
            <?php echo form_input($password);?>

            <?php echo form_label('Confirme contraseña:') ?>
            <?php echo form_input($password_confirm);?>
<?php echo form_submit(array('type'=>'submit', 'value'=>'Enviar', 'class'=>'pure-button pure-button-primary pure-input-1'));?>

<?php echo form_close();?>
          <br>
        <a href="<?php echo site_url('/') ?>">Inicio</a>
</div>