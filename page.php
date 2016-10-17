<?php get_header(); ?>

<article class="col-2">
<?php
  while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/content', 'page' );

  endwhile; // End of the loop.
?>
</article>

<aside class="col-1">
          
</aside>

<?php
get_footer();
