<div>
<?php
$atts = array('id' => 'frm_morse');
echo form_open('main/result',$atts);
echo form_fieldset();?>
<?php echo form_hidden('filetype','morse'); ?>
<p><?php echo form_label("Message to encode/decode:", 'message') ?><?php echo form_textarea('message'); ?></p>
<p><?php echo form_label("Encode:", 'code1') ?>
<?php echo form_radio($code1); ?></p>
<p><?php echo form_label("Decode:", 'code2') ?>
<?php echo form_radio($code2); ?></p>
<?php echo form_submit(array('name' => 'btnMorse', 'value' => $this->lang->line('convert'))); ?>
<?php echo form_fieldset_close(); ?>
<?php echo form_close(); ?>
</div>


