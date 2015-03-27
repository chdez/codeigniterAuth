<div class="contform">
   
<h1><?php echo lang('edit_user_heading');?></h1>
<p><?php echo lang('edit_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(uri_string(), array('class' => 'pure-form pure-form-stacked'));?>
            <?php echo lang('edit_user_fname_label', 'first_name');?>
            <?php echo form_input($first_name);?>
            <?php echo lang('edit_user_lname_label', 'last_name');?> 
            <?php echo form_input($last_name);?>
            <?php echo lang('edit_user_company_label', 'company');?> 
            <?php echo form_input($company);?>
            <?php echo lang('edit_user_phone_label', 'phone');?> 
            <?php echo form_input($phone);?>
            <?php echo lang('edit_user_password_label', 'password');?> 
            <?php echo form_input($password);?>
            <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?>
            <?php echo form_input($password_confirm);?>
      <?php if ($this->ion_auth->is_admin()): ?>

          <h3><?php echo lang('edit_user_groups_heading');?></h3>
          <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach?>

      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

       <?php echo form_submit(array('type'=>'submit', 'value'=>'Guardar', 'class'=>'pure-button pure-button-primary pure-input-1'));?>

<?php echo form_close();?>
</div>