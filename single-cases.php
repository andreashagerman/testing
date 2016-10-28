<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
			<div id="second-content">
				<?php the_post_thumbnail('full'); ?>			
				<div class="excerpt"><?php the_excerpt(); ?></div>
			</div>
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

				<?php comments_template( '', true ); ?>



			<?php endwhile; // end of the loop. ?>
			
		</div><!-- #content -->

		<?php
		if( get_field( "mere-info" ) ): ?>
		<div class="mere-info entry-content">
			<?php the_field( "mere-info" ); ?>
		</div>
		<?php endif; ?>
	
		<nav class="nav-single">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
			<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
			<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
		</nav><!-- .nav-single -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>