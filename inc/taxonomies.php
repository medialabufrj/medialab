<?php

	add_action( 'init', 'medialab_taxonomies' );
	function medialab_taxonomies() {
		register_taxonomy('taxonomy_slug',
			array( 'post_type_slug' ),
			array(
				'hierarchical' => true,
				'label' => 'Categorias',
				'show_ui' => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'taxonomy_slug'),
				'singular_label' => 'Categoria'
			)
		);
	}

?>