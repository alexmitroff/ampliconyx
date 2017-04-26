<?php get_header(); ?>
<main>
    <div class="container">
        <?php wp_nav_menu(array(
            'container' => 'nav',
            'link_before' => '<span>',
            'link_after' => '</span>',
            )); ?>  
    </div>
    <div class="container">
    <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;?>
    </div>
</main>
<?php get_footer(); ?>
