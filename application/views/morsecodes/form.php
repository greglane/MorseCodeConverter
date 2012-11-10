<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Morse Code Encoder/Decoder</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/morse.css">
        <script src="<?php echo base_url()?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
<div id="wrapper">
<h1>Morse Code Encoder/Decoder</h1>
<div>
<?php
$atts = array('id' => 'frm_morse');
echo form_open('morsecodes/convert',$atts);
echo form_fieldset();?>
<?php echo form_hidden('filetype','morse'); ?>
<p><?php echo form_label("Message to encode/decode:", 'message') ?></p>
<p><?php echo form_textarea('message',$message); ?></p>
<p><?php echo form_label("Encode:", 'code1') ?>
<?php echo form_radio($code1); ?></p>
<p><?php echo form_label("Decode:", 'code2') ?>
<?php echo form_radio($code2); ?></p>
<?php echo form_submit(array('name' => 'btnMorse', 'value' => 'Convert')); ?>
<?php echo form_fieldset_close(); ?>
<?php echo form_close(); ?>
</div>
</div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url()?>/assets/js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="<?php echo base_url()?>/assets/js/plugins.js"></script>
        <script src="<?php echo base_url()?>/assets/js/morse.js"></script>
    </body>
</html>



