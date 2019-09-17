<?php $eixo = get_category(get_query_var('cat')); ?>

<div class="eixos--description content">
	<p><?php echo $eixo->description ?></p>
	<hr style="margin: 20px 0;opacity: 0.5;">
	<small><?php the_field('acf_eixo_english', $eixo); ?></small>
</div>

<hr>

<section class="eixos--projetos content">
	
	<h2 class="display upper">Projetos</h2>

	<div class="columns is-multiline">
	
<?php 
	$args = array ( 'category' => $eixo->cat_ID, 'posts_per_page' => 6, 'post_type' => 'projetos');
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) : 
		setup_postdata($post);
?>
	<article class="eixos--projeto column is-4">
		
		<div>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('square-medium'); ?>
			</a>
		</div>
		
		<div>
			<h4><a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a></h4>
		</div>

	</article>

<?php endforeach; ?>
	
	</div>
	
	<div class="eixos--projetos-link">
		<a class="display upper btn" href="/projetos/?eixo=<?php echo $eixo->slug ?>">Listar todos os projetos de <?php echo $eixo->name ?></a>
	</div>

</section>

<div class="spacer"></div>

<div class="columns">

	<!-- BLOG -->

	<div class="column eixos--blog content">

		<h2 class="display upper">Blog</h2>

		<div class="spacer"></div>

		<?php 
			$args = array ( 'category' => $eixo->cat_ID, 'posts_per_page' => 6, 'post_type' => 'blog');
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : 
				setup_postdata($post);
		?>
			<article class="eixos--blog-post columns">
				
				<div class="column is-3">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('square-small'); ?>
					</a>
				</div>
				
				<div class="column">
					<h5 style="margin-bottom: 0.1em;">
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h5>
					<small><?php the_date(); ?></small>
				</div>

			</article>

		<?php endforeach; ?>


	</div>
	
	<div class="column is-1"></div>

	<!-- Eventos -->

	<div class="column eixos--eventos content">

		<h2 class="display upper">Eventos</h2>

		<div class="spacer"></div>

		<?php 
			$args = array ( 'category' => $eixo->cat_ID, 'posts_per_page' => 6, 'post_type' => 'eventos');
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : 
				setup_postdata($post);
		?>
			<article class="eixos--evento columns">
				
				<div class="column is-3">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('square-small'); ?>
					</a>
				</div>
				
				<div class="column">
					<h5>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h5>
				</div>

			</article>

		<?php endforeach; ?>


	</div>

</div>

<div class="columns">
	<div class="column">
		<a class="display upper btn" href="/blog/?eixo=<?php echo $eixo->slug ?>">Ver todos os posts de <?php echo $eixo->name ?></a>
	</div>
	<div class="column is-1"></div>
	<div class="column">
		<a class="display upper btn" href="/eventos/?eixo=<?php echo $eixo->slug ?>">Ver todos os eventos de <?php echo $eixo->name ?></a>
	</div>
</div>