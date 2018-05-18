<?php
/*
Template Name: Sobre
*/
?>

<div class="content">

<?php while(have_posts()): the_post(); ?>

	<h1 class="display upper"><?php the_title(); ?></h1>

	<?php the_content() ?>

	<hr>

	<h2 class="display upper">Equipe</h2>
	
	<div class="sobre-equipe columns is-multiline">
<?php

	if( have_rows('acf_equipe') ):

		while ( have_rows('acf_equipe') ) : the_row();
?>
		<div class="sobre-equipe--pessoa column is-4-tablet is-3-desktop">
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

	<h2 class="display upper">Parceiros</h2>
	
	<div class="sobre-parceiros columns is-multiline">

<?php

	if( have_rows('acf_apoio') ):

		while ( have_rows('acf_apoio') ) : the_row();
?>
		<div class="sobre-parceiros--item column is-narrow">
			<a href="<?php the_sub_field('url'); ?>" target="_blank" title="<?php the_sub_field('nome'); ?>">
				<img width="128" src="<?php $img = get_sub_field('marca'); echo $img['url'] ?>" alt="<?php the_sub_field('nome'); ?>">
			</a>
		</div>
			
<?php
		endwhile;

	endif;

?>

	</div>

<?php endwhile; ?>

</div>