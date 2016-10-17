<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package slamalphas
 */

get_header(); ?>

<?php
if ( have_posts() ) : ?>

<ul class="post-list">

<?php
  while ( have_posts() ) : the_post(); ?>
    <li><?php get_template_part( 'template-parts/content', get_post_format() );?></li>
  <?php  endwhile; ?>

</ul>

<?php
else :
    get_template_part( 'template-parts/content', 'none' );
endif;
get_footer();
