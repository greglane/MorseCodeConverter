<div id="inner_content">
<div id="three_col">
<h3>Morse Encode/Decode</h3>
<!--<?php echo anchor('/','home') ?> &raquo; file format<br />-->
<div id="copyzone">


<?php
$atts = array('id' => 'frm_text');
echo form_open('qrcode',$atts);
echo form_fieldset();
?>
<p>
<?php
$textarea = array(
              'name'        => 'myfile',
              'id'          => 'mymorse',
              'value'       => $file_string,
		'readonly' => 'readonly'
);
echo form_textarea($textarea);
?>
</p>
<?php echo form_fieldset_close(); ?>
<?php echo form_close(); ?>
</div>
<div id="buttonzone">
<?php
$atts = array('id' => 'frm_free');
echo form_open('qrdash',$atts);
echo form_fieldset();
?>
<p>
<?php
echo form_hidden('myfile',$file_string);
?>
</p>
<?php echo form_hidden('filetype','text'); ?>
<?php echo form_submit(array('name' => 'Make QR', 'value' => 'Make QR Code')); ?>
<?php echo form_fieldset_close(); ?>
<?php echo form_close(); ?>
<p></p>
<?php
echo form_open('qrdash/facebook');
echo form_fieldset();
echo form_hidden('myfile',$file_string);
?>
<?php echo form_submit(array('name' => 'Make QR', 'value' => 'Post to facebook')); ?>
<?php echo form_fieldset_close(); ?>
<?php echo form_close(); ?>

<?php
echo form_open('download/' . $filetype);
echo form_fieldset();
?>
<p>
<?php
echo form_hidden('vcfdata',$file_string);

?>
</p>
<?php echo form_submit(array('name' => 'Download .vcf', 'value' => 'Download')); ?>
<?php echo form_fieldset_close(); ?>
<?php echo form_close(); ?>
</div>
<div class="clear"></div>
</div>
</div>