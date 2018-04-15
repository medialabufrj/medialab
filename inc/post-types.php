<?php

	add_action( 'init', 'medialab_post_types' );
	function medialab_post_types() {
		$types = array(
			array('Blog Post','Blog Posts','blog'),
			array('Evento','Eventos','eventos'),
			array('Projeto','Projetos','projetos'),
			array('Publicação','Publicações','publicacoes')
		);
		foreach($types as $type):

			register_post_type($type[2],
				array(
					'label' => $type[1],
					'labels' => array('singular_name' => $type[0]),
					'description' => '',
					'public' => true,
					'show_ui' => true,
					'show_in_menu' => true,
					'capability_type' => 'post',
					'hierarchical' => false,
					'rewrite' => array('slug' => $type[2]),
					'query_var' => true,
					'supports' => array('title','editor','thumbnail'),
					'taxonomies' => array('category','post_tag'),
					'menu_position' => 5,
					'has_archive' => true
				)
			);

		endforeach;

		/*
		function dobem__order__custom_post_types( $wp_query ) {
			if (is_admin()) {
				$post_type = $wp_query->query['post_type'];
				if ( $post_type == 'dobem_bebidas' || $post_type == 'dobem_barrinhas' ) {
					$wp_query->set('orderby', 'page_order');
					$wp_query->set('order', 'ASC');
				}
			}
		}
		add_filter('pre_get_posts', 'dobem__order__custom_post_types');
		*/
	}

	function post_remove () { 
		remove_menu_page('edit.php');
	}

	add_action('admin_menu', 'post_remove');

	add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );
	
	function add_current_nav_class($classes, $item) {
		
		// Getting the current post details
		global $post;
		
		// Getting the post type of the current post
		$current_post_type = get_post_type_object(get_post_type($post->ID));
		$current_post_type_slug = $current_post_type->rewrite['slug'];
			
		// Getting the URL of the menu item
		$menu_slug = strtolower(trim($item->url));
		
		// If the menu item URL contains the current post types slug add the current-menu-item class
		if (strpos($menu_slug,$current_post_type_slug) !== false) {
		
		   $classes[] = 'current-menu-item';
		
		}
		
		// Return the corrected set of classes to be added to the menu item
		return $classes;
	
	}

?>