<?php
/*
Template Name: Sobre
*/
?>
<?php while(have_posts()): the_post(); ?>

	<h1 class="display upper"><?php the_title(); ?></h1>

	<?php the_content() ?>

	<h2 class="display upper">Equipe</h2>
	
	<div class="sobre-equipe grid grid--gutters grid--wrap">
<?php

	if( have_rows('acf_equipe') ):

		while ( have_rows('acf_equipe') ) : the_row();
?>
		<div class="sobre-equipe--pessoa col col--1of3">
			<img src="<?php $img = get_sub_field('foto'); echo $img['url'] ?>">
			<h3><?php the_sub_field('nome'); ?></h3>
			<h4><?php the_sub_field('titulo'); ?></h4>
			<p><?php the_sub_field('bio'); ?></p>
		</div>
			
<?php
		endwhile;

	endif;

?>

	</div>

	<h2 class="display upper">Apoio</h2>


<?php endwhile; ?>