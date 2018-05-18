<?php while(have_posts()): the_post(); ?>
<article class="content">
    <h1><?php the_title() ?></h1>
    <?php the_content() ?>

    <hr>

    <?php if ( is_singular( 'projetos' ) ) : ?>


        <?php
        $connected = new WP_Query( array(
          'connected_type' => 'projetos_eventos',
          'connected_items' => get_queried_object(),
          'nopaging' => true,
        ) );

        if ( $connected->have_posts() ) :
        ?>
        <div class="related-posts related-posts-eventos">
            <h3>Eventos relacionados</h3>
            <ul>
            <?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            </ul>
        </div>
        <?php 
        wp_reset_postdata();
        endif;
        ?>

        <?php
        $connected = new WP_Query( array(
          'connected_type' => 'projetos_blog',
          'connected_items' => get_queried_object(),
          'nopaging' => true,
        ) );

        if ( $connected->have_posts() ) :
        ?>
        <div class="related-posts related-posts-eventos">
            <h3>Posts relacionados</h3>
            <ul>
            <?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            </ul>
        </div>
        <?php 
        wp_reset_postdata();
        endif;
        ?>

        

    <?php endif; ?>

    <?php if ( is_singular( 'eventos' ) ) : ?>

        <?php
        $connected = new WP_Query( array(
          'connected_type' => 'projetos_eventos',
          'connected_items' => get_queried_object(),
          'nopaging' => true,
        ) );

        if ( $connected->have_posts() ) :
        ?>
        <div class="related-posts related-posts-eventos">
            <h3>Projetos relacionados</h3>
            <ul>
            <?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            </ul>
        </div>
        <?php 
        wp_reset_postdata();
        endif;
        ?>

        <?php
        $connected = new WP_Query( array(
          'connected_type' => 'eventos_blog',
          'connected_items' => get_queried_object(),
          'nopaging' => true,
        ) );

        if ( $connected->have_posts() ) :
        ?>
        <div class="related-posts related-posts-eventos">
            <h3>Posts relacionados</h3>
            <ul>
            <?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            </ul>
        </div>
        <?php 
        wp_reset_postdata();
        endif;
        ?>

    <?php endif; ?>


    <?php if ( is_singular( 'blog' ) ) : ?>

        <?php
        $connected = new WP_Query( array(
          'connected_type' => 'projetos_blog',
          'connected_items' => get_queried_object(),
          'nopaging' => true,
        ) );

        if ( $connected->have_posts() ) :
        ?>
        <div class="related-posts related-posts-eventos">
            <h3>Projetos relacionados</h3>
            <ul>
            <?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            </ul>
        </div>
        <?php 
        wp_reset_postdata();
        endif;
        ?>

        <?php
        $connected = new WP_Query( array(
          'connected_type' => 'eventos_blog',
          'connected_items' => get_queried_object(),
          'nopaging' => true,
        ) );

        if ( $connected->have_posts() ) :
        ?>
        <div class="related-posts related-posts-eventos">
            <h3>Eventos relacionados</h3>
            <ul>
            <?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            </ul>
        </div>
        <?php 
        wp_reset_postdata();
        endif;
        ?>

    <?php endif; ?>

</article>
<?php endwhile; ?>
