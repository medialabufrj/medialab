
<?php if(isset($_GET['eixo'])): ?>
<?php
	$eixo = get_category_by_slug($_GET['eixo']);
	$query_object = get_queried_object();
	//var_dump( $posttype );
?>
	<div class="filter-title">
		
		<p class="display upper"><?php echo $wp_query->found_posts; ?>
			<?php echo $query_object->labels->singular_name; ?>(s) em "<?php echo $eixo->name ?>"
		</p>
		<!-- <a class="display upper btn" href="/<?php echo $query_object->name ?>">remover filtro</a> -->

	</div>

	<hr>

<?php endif; ?>

<section class="post-loop">

	<div class="content">

		<?php while(have_posts()): the_post(); ?>

			<article class="<?php echo $post_classes; ?> columns">
				
				<div class="column is-6">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('large'); ?>
					</a>
				</div>

				<div class="column is-6">
					<div class="destaque-info">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
						<p><?php echo wp_trim_words(strip_shortcodes(get_the_content()), 60); ?></p>
						<p><a href="<?php the_permalink(); ?>">Leia mais</a></p>
					</div>
				</div>

			</article>

		<?php endwhile; ?>

	</div>
	
	<div class="spacer"></div>
	
    <nav class="pagination is-centered" role="navigation" aria-label="pagination">
        <?php echo bulma_pagination(); ?>
    </nav>

</section>

