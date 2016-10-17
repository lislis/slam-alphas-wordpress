<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package slamalphas
 */

get_header(); ?>

<?php
if ( have_posts() ) : ?>

<section>			
<h1 class="title-main"><?php printf( esc_html__( 'Search Results for: %s', 'slamalphas' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
</section>
<?php
get_footer();
