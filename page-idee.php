<?php
/*
 * Template Name: Die Idee
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
  <h2 class="title-sub">Die Alphas</h2>
  <ul class="list-titlelike">
  <?php
      $args = array( 'post_type' => 'alpha', 'posts_per_page' => 99, 'orderby' => 'post_title', 'order' => 'ASC' );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
      $meta = get_post_meta(get_the_ID(), 'firstname', true);
      echo '<li><a href="'. get_the_excerpt() .'" target="_blank" title="Mehr über '. $meta .' '. get_the_title() .'">'. $meta .' '. get_the_title() . '</a></li>';
    endwhile; ?>
  </ul>
  <?php 
  $member_page = get_page_by_title( 'Fördermitglieder' ); 
  if ($member_page) { ?>
    <p>Wir freuen uns über <a href="<?php echo get_permalink($member_page->ID); ?>">Fördermitglieder</a>.</p>
  <?php } ?>
</aside>

<?php
get_footer();
