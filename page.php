<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package qoob
 */

get_header(); ?>

			<?php
			$template_parts = 'page';
			while ( have_posts() ) : the_post();
				$content = get_the_content();
				if(preg_match("/\[qoob-page\]/i", $content)) {
					$template_parts = 'qoob';
				}
				get_template_part( 'template-parts/content', $template_parts );

			endwhile; // End of the loop.
			?>
<?php
get_footer();
