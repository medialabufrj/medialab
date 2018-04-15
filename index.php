<section class="post-loop">

    <?php while(have_posts()): the_post(); ?>

        <article class="<?php echo $post_classes; ?> row">
            
            <div class="row__col_sw_12 row__col_lw_6">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('large'); ?>
                </a>
            </div>

            <div class="row__col_sw_12 row__col_lw_6">
                <div class="destaque-info">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                    <p><?php echo wp_trim_words(strip_shortcodes(get_the_content()), 60); ?></p>
                    <p><a href="<?php the_permalink(); ?>">Leia mais</a></p>
                </div>
            </div>

        </article>

    <?php endwhile; ?>
    
    <div class="posts-pagination display upper">
        <?php the_posts_pagination(array('screen_reader_text'=>' ')); ?>
    </div>

</section>