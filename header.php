<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- <link rel="icon" href="<?php echo WP_THEME_URL ?>/img/favicon.ico" /> -->
	
	<link href="https://fonts.googleapis.com/css?family=Rajdhani:300,500,700|Source+Sans+Pro:300,300i,600,600i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo WP_THEME_URL ?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo WP_THEME_URL ?>/css/flexgrid.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo WP_THEME_URL ?>/css/medialab.css.php">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<header style="padding-top: 50px;">

		<div class="section-wrapper header">

			<a href="<?php echo site_url(); ?>"><img src="<?php echo WP_THEME_URL ?>/img/medialab-marca.svg" alt="" style="position:absolute;top:40px;" width="128"></a>
			
			<nav class="display site-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
			
			<nav class="display site-categories">
				<?php wp_list_categories( array('title_li'=>'') ) ?>
			</nav>

		</div>

	</header>

