<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
		<div id="second-content">
			<div class="second">
			
			<?php if( get_field('secondoverskrift') ): ?>
			<h2><?php the_field('secondoverskrift'); ?></h2>
			<?php endif; ?>
		
			<?php if( get_field('secondtext') ): ?>
			<?php the_field('secondtext'); ?>
			<?php endif; ?>
			</div>
		</div>
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>