<?php $eixo = get_category(get_query_var('cat')); ?>

<div class="eixos--description">
	<p><strong><?php the_field('acf_eixo_title', $eixo) ?></strong></p>
	<p><?php echo $eixo->description ?></p>
</div>

<hr>

<section class="eixos--projetos">
	
	<h2 class="display upper">Projetos</h2>

	<div class="row multi">
	
<?php 
	$args = array ( 'category' => $eixo->cat_ID, 'posts_per_page' => 6, 'post_type' => 'projetos');
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) : 
		setup_postdata($post);
?>
	<article class="eixos--projeto row__col_sw_12 row__col_mw_4">
		
		<div>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('square-medium'); ?>
			</a>
		</div>
		
		<div>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</div>

	</article>

<?php endforeach; ?>
	
	</div>
	
	<div class="eixos--projetos-link">
		<a class="display upper btn" href="/projetos/?eixo=<?php echo $eixo->slug ?>">Listar todos os projetos de <?php echo $eixo->name ?></a>
	</div>

</section>