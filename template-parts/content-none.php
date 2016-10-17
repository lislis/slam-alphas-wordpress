<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package slamalphas
 */

?>
<section>
<h1 class="title-main"><?php esc_html_e( 'Nothing Found', 'slamalphas' ); ?></h1>
	
<div>
<?php
    if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

    <p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'slamalphas' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

<?php elseif ( is_search() ) : ?>

<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'slamalphas' ); ?></p>
<?php
get_search_form();

else : ?>

<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'slamalphas' ); ?></p>
<?php
get_search_form();

endif; ?>
</section>