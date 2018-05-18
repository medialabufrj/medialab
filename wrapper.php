<?php $base = app_template_base(); ?>
 
<?php if(!isset($_POST['ajax'])) get_header( $base ); ?>
	<div class="section-wrapper">
	<?php include app_template_path(); ?>
	</div>
<?php if(!isset($_POST['ajax'])) get_footer( $base ); ?>