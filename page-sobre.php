<?php
/*
Template Name: Sobre
*/
?>
<?php while(have_posts()): the_post(); ?>

	<h1 class="display upper"><?php the_title(); ?></h1>

	<?php the_content() ?>

	<hr>

	<h2 class="display upper">Equipe</h2>
	
	<div class="sobre-equipe row multi">
<?php

	if( have_rows('acf_equipe') ):

		while ( have_rows('acf_equipe') ) : the_row();
?>
		<div class="sobre-equipe--pessoa row__col_sw_6 row__col_mw_4 row__col_lw_3">
			<img src="<?php $img = get_sub_field('foto'); echo $img['url'] ?>">
			<h3><?php the_sub_field('nome'); ?></h3>
			<h4><?php the_sub_field('titulo'); ?></h4>
			<!-- <p><?php the_sub_field('bio'); ?></p> -->
		</div>
			
<?php
		endwhile;

	endif;

?>

	</div>

	<hr>

	<h2 class="display upper">Apoio</h2>

<?php

	if( have_rows('acf_apoio') ):

		while ( have_rows('acf_apoio') ) : the_row();
?>
		<div class="sobre-equipe--apoio">
			<a href="<?php the_sub_field('url'); ?>" target="_blank" title="<?php the_sub_field('nome'); ?>">
				<img width="128" src="<?php $img = get_sub_field('marca'); echo $img['url'] ?>" alt="<?php the_sub_field('nome'); ?>">
			</a>
		</div>
			
<?php
		endwhile;

	endif;

?>

<?php endwhile; ?>