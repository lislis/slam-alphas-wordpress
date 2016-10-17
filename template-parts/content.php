<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package slamalphas
 */

?>
<article <?php if (is_single()) : echo 'class="post-single"'; endif; ?>>
    <header>
      <datetime class="title-sub"><?php the_date(); ?></datetime>
      <?php
      if ( is_single() ) :
        the_title( '<h1 class="title-main">', '</h1>' );

        $meta = get_post_meta($post->ID, 'real_author', true);
        if ($meta && $meta[0]) {
          echo '<p class="post-author">geschrieben von '. $meta;
          echo ', veröffentlicht von '. get_the_author() .'</p>';
        } else {
          '<p class="post-author">geschrieben und veröffentlicht von '. the_author() .'</p>';
        }
      else :
        the_title( '<h2 class="title-main"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      endif; ?>
    </header>
    <?php if ( has_post_thumbnail() ) :
      if ( is_single() ) : ?>
        <figure><?php the_post_thumbnail('large'); ?></figure><?php
      else : ?>
        <figure><?php the_post_thumbnail('medium'); ?></figure><?php
      endif; ?>
    <?php endif; ?>
    <div>
      <?php if ( is_single() ) :
        the_content();
      else :
        the_excerpt();
      endif; ?>
    </div>
</article>