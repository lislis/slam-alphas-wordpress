<?php
/*
 * Template Name: Poetfilter
 */
?>
<?php get_header(); ?>

    <article class="">
<?php
    while ( have_posts() ) : the_post();

get_template_part( 'template-parts/content', 'page' );

endwhile; // End of the loop.
?>
    </article>

 
<?php
        get_footer();
