<?php
/*
Template Name: Home
*/
?>


<?php while(have_posts()): ?>
<?php the_post(); ?>

<div class="destaques-carousel content">
	
<?php
	
	if( have_rows('acf_destaques') ):
		while ( have_rows('acf_destaques') ) :
			the_row();
			$destaque = get_sub_field('post');
?>
	<div class="carousel-cell">
		<div class="columns">
			<div class="column is-6">
				<a href="<?php echo get_permalink($destaque->ID) ?>"><?php echo get_the_post_thumbnail($destaque->ID,'2x'); ?></a>
			</div>
			<div class="column is-6">
				<div class="destaque-info">
					<h3 class="display"><a href="<?php echo get_permalink($destaque->ID) ?>"><?php echo $destaque->post_title; ?></a></h3>
					<p><?php echo wp_trim_words(strip_shortcodes($destaque->post_content), 60); ?></p>
					<p><a href="<?php echo get_permalink($destaque->ID) ?>">Leia mais</a></p>
				</div>
			</div>
		</div>
	</div>

<?php
		endwhile;
	endif;
?>

</div>


<?php endwhile; ?>