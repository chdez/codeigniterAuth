
<div class="contform">
    

<h1><?php echo lang('edit_group_heading');?></h1>
<p><?php echo lang('edit_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(current_url(), array('class' => 'pure-form pure-form-stacked'));?>

            <?php echo lang('edit_group_name_label', 'group_name');?> 
            <?php echo form_input($group_name);?>
            <?php echo lang('edit_group_desc_label', 'description');?> 
            <?php echo form_input($group_description);?>
            <?php echo form_submit(array('type'=>'submit', 'value'=>'Guardar', 'class'=>'pure-button pure-button-primary pure-input-1'));?>

<?php echo form_close();?>

            </div>