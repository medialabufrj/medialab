<?php

// CONSTANTS

define( 'WP_SITE_URL', get_bloginfo('url') );
define( 'WP_THEME_URL', get_bloginfo( 'stylesheet_directory' ) );
define( 'WP_TODAY', date('Y_m_d',strtotime('00:00:00')));

// POST THUMBNAILS

add_theme_support('post-thumbnails');
add_theme_support('post-thumbnails', array('post', 'page'));
set_post_thumbnail_size( 512, 512, false );
add_image_size( '2x', 1024, 1024, false );
add_image_size( '4x', 2048, 2048, false );
add_image_size( 'square-large', 512, 512, true );
add_image_size( 'square-medium', 256, 256, true );
add_image_size( 'square-small', 128, 128, true );

// INCLUDES

include 'inc/markdown.php';
include 'inc/wrapping.php';
include 'inc/post-types.php';
include 'inc/posts2posts.php';
//include 'inc/taxonomies.php';

// ADMIN MENU ORDER

function medialab_custom_menu_order() {
    return array( 'index.php', 'separator1', 'edit.php?post_type=page' );
}

add_filter( 'custom_menu_order', '__return_true' );
add_filter( 'menu_order', 'medialab_custom_menu_order' );


// REGISTER MENU

function register_main_menu() {
  register_nav_menu('main-menu',__( 'Menu Principal' ));
}
add_action( 'init', 'register_main_menu' );

// REMOVE ADMIN BAR

// add_filter('show_admin_bar', '__return_false');

// TITLE FILTER

function wp_title_filter( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}
	
	global $page, $paged;

	// Add the blog name
	$title = get_bloginfo( 'name', 'display' ) . " " . $title;

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Pag. %s', '_s' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'wp_title_filter', 10, 2 );


// MARKDOWN

function parse_markdown($my_text){
	$my_text = Markdown($my_text);
	return parse_special($my_text);
}

// CHANGE QUERIES

add_action( 'pre_get_posts', 'custom_query_vars' );
function custom_query_vars( $query ) {
	if ( !is_admin() && $query->is_main_query() ) {
		if ( isset($_GET['eixo']) ) {
			$query->set( 'category_name', $_GET['eixo'] );
		}
	}
	return $query;
}

// PAGINATION

function bulma_pagination() {
  global $wp_query;
  $big = 999999999; //I trust StackOverflow.
  $total_pages = $wp_query->max_num_pages; //you can set a custom int value to this var
  $pages = paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $total_pages,
    'prev_next' => false,
    'type'  => 'array',
    'prev_next'   => true,
    'prev_text'    => 'Anterior',
    'next_text'    => 'Próxima',
  ) );
  if ( is_array( $pages ) ) {
  //Get current page
    $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var( 'paged' );
  //Disable Previous button if the current page is the first one
    if ($paged == 1) {
      echo '<a class="pagination-previous" disabled>Anterior</a>';
    } else {
      echo '<a class="pagination-previous" href="' . get_previous_posts_page_link() . '">Anterior</a>';
    }
  //Disable Next button if the current page is the last one
    if ($paged<$total_pages) {
      echo '<a class="pagination-next" href="' . get_next_posts_page_link() . '">Próxima</a>
      <ul class="pagination-list">';
    } else {
      echo '<a class="pagination-next" disabled>Próxima</a>
      <ul class="pagination-list">';
    }
    for ($i=1; $i<=$total_pages; $i++) {
      if ($i == $paged) {
        echo '<li><a class="pagination-link is-current" href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
      } else {
        echo '<li><a class="pagination-link" href="'. get_pagenum_link($i) . '">' . $i . '</a></li>';
      }
    }
    echo '</ul>';
  }
}


?>