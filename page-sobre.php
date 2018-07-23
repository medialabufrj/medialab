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
			<a href="#" class="abrir-perfil">
				<img class="foto" src="<?php $img = get_sub_field('foto'); echo $img['sizes']['square-medium'] ?>">
				<h3 class="nome"><?php the_sub_field('nome'); ?></h3>
				<h4 class="titulo"><?php the_sub_field('titulo'); ?></h4>
				<span class="bio" style="display: none;"><?php the_sub_field('bio'); ?></span>
			</a>
		</div>
			
<?php
		endwhile;

	endif;

?>

	</div>

	<hr>


	<h2 class="display upper">Iniciação Científica</h2>
	
	<div class="sobre-equipe columns is-multiline is-mobile">
<?php

	if( have_rows('acf_bolsistas') ):

		while ( have_rows('acf_bolsistas') ) : the_row();
?>
		<div class="sobre-equipe--pessoa column is-6-mobile is-3-tablet is-2-desktop">
			<a href="#" class="abrir-perfil">
				<img class="foto" src="<?php $img = get_sub_field('foto'); echo $img['sizes']['square-small'] ?>">
				<h5 class="nome"><?php the_sub_field('nome'); ?></h5>
				<span class="bio" style="display: none;"><?php the_sub_field('bio'); ?></span>
			</a>
		</div>
			
<?php
		endwhile;

	endif;

?>

	</div>

	<hr>


	<h2 class="display upper">Pesquisadores Colaboradores</h2>
	
	<div class="sobre-equipe columns is-multiline is-mobile">
<?php

	if( have_rows('acf_colaboradores') ):

		while ( have_rows('acf_colaboradores') ) : the_row();
?>
		<div class="sobre-equipe--pessoa column is-6-mobile is-3-tablet is-2-desktop">
			<a href="#" class="abrir-perfil">
				<img class="foto" src="<?php $img = get_sub_field('foto'); echo $img['sizes']['square-small'] ?>">
				<h5 class="nome"><?php the_sub_field('nome'); ?></h5>
				<span class="bio" style="display: none;"><?php the_sub_field('bio'); ?></span>
			</a>
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

<div class="modal modal-sobre">
	<div class="modal-background"></div>
	<div class="modal-card">
		<section class="modal-card-body">
				<div class="columns">
					<div class="column is-narrow">
						<img class="foto" src="#">
					</div>
					<div class="column content">
						<h3 class="nome"></h3>
						<h4 class="titulo"></h4>
						<div class="texto"></div>
					</div>
				</div>
		</section>	
			
	</div>
	<button class="modal-close is-large" aria-label="close"></button>
</div>