<?php
/*
 * Template Name: FAQ
 */
?>
<?php get_header(); ?>

<article class="col-2">
<?php
  while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/content', 'page' );

  endwhile; // End of the loop.
?>
</article>

<aside class="col-1">
  <ul class="list-images">
  <?php
    $args = array( 'post_type' => 'faq_image', 'posts_per_page' => 99, 'order' => 'asc' );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
      echo '<li><img src="'. get_the_post_thumbnail_url(null, 'large') . '" alt="'. get_the_title() . '">';
      echo '<p class="image-additional">'. get_the_title() .'</p></li>';
    endwhile; ?>
  </ul>
</aside>

<?php
get_footer();
