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
  <?php if ($field = get_post_meta($post->ID, 'alpha', false)) {
      foreach ($field as $key => $alpha) { ?>
    <li><?php echo $field[$key]; ?></li>
  <?php }} ?>
  </ul>
</aside>

<?php
get_footer();
