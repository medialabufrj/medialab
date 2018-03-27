<?php
/*
Template Name: Sobre
*/
?>
<?php while(have_posts()): the_post(); ?>

    <h1 class="display upper"><?php the_title(); ?></h1>

    <?php the_content() ?>

    <h2 class="display upper">Equipe</h2>

    

    <h2 class="display upper">Apoio</h2>


<?php endwhile; ?>