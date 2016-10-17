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
<h1 class="title-main"><?php esc_html_e( 'Nichts gefunden', 'slamalphas' ); ?></h1>
	
<div>
<?php
    if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

    <p><?php printf( wp_kses( __( 'Bereit den ersten Beitrag zu schreiben? <a href="%1$s">Leg hier los</a>.', 'slamalphas' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

<?php elseif ( is_search() ) : ?>

<p><?php esc_html_e( 'Sorry, aber für deine Suchbegriffe haben wir nichts gefunden. Versuch es nochmal mit anderen Begriffen.', 'slamalphas' ); ?></p>
<?php
get_search_form();

else : ?>

<p><?php esc_html_e( 'Sieht so aus als können wir nicht finden wonach du suchst. Vllt hilft eine Suche weiter.', 'slamalphas' ); ?></p>
<?php
get_search_form();

endif; ?>
</section>