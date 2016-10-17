<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package slamalphas
 */

get_header(); ?>

<section class="error-404 not-found">    
    <h1 class="title-main"><?php esc_html_e( '404 Seite nicht gefunden', 'slamalphas' ); ?></h1>

    <div class="page-content">
    <p><?php esc_html_e( 'Sieht so aus als gäbe es diese Seite nicht. Probier doch mal sie zu suchen.', 'slamalphas' ); ?></p>

    <?php get_search_form(); ?>
    </div><!-- .page-content -->
</section><!-- .error-404 -->

<?php
get_footer();
