<div class="contform">
    <h2>Iniciar Sesión</h2>
    <div id="infoMessage"><?php echo $message;?></div>
    <?php echo form_open("auth/login", array('class'=>'pure-form pure-form-stacked'));?>
    <fieldset>
        <legend>
        </legend>
        <?php echo lang('login_identity_label', 'identity');?>
        <?php echo form_input($identity);?>
        <?php echo lang('login_password_label', 'password');?>
        <?php echo form_input($password);?>
        <label for="remember" class="pure-checkbox">
            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> Recordar mis datos
        </label>
        <?php echo form_submit(
                array(
                    'type' => 'submit', 
                    'value' => 'Entrar', 
                    'class' => 'pure-button pure-button-primary pure-input-1'
                )); ?>
    </fieldset>
    <?php echo form_close();?>
        <a href="forgot_password"><?php echo lang('login_forgot_password');?></a><br>
        <a href="create_user">Crear una cuenta</a>
    </p>
</div>