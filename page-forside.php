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

			<section id="branding">
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php // get_template_part( 'content', 'page' ); ?>
				<?php  //comments_template( '', true ); ?>
				<div class="front-slide"><?php the_post_thumbnail('full'); ?></div>
				<div id="entry" class="entry-content"><?php the_content(); ?></div>
			<?php endwhile; // end of the loop. ?>

			</section>
			
			<section id="case">

				<h2>Case</h2>
				<?php 		
					global $post;
					$args = array( 'numberposts' => 1, 'post_type'=> 'cases', 'orderby'=>'rand');
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); ?>
					<div class="excerpt">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
					<div class="more">
					<p class="more-excerpt"><a href="<?php the_permalink(); ?>">Læs mere</a></p>	
					<p class="more"><a title="cases" href="<?php echo esc_url( home_url( '/' ) ); ?>cases/">Se flere cases</a></p></div>
					</div>
					<div class="featured"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
					<?php endforeach; ?>
					
			
			</section>

			<section id="kontakt">
			<h2>Kontakt</h2>
				<div class="kontaktinformationer">
					<h3>Kom i kontakt med os her</h3>
					<p class="telefon"><a href="tel:+4527506481">+45 27 50 64 81</a></p>
					<p class="mail"><a href="mailto:info@genau.dk">info@genau.dk</a></p>
					<p class="twitter"><a href="https://twitter.com/genau_dk">@genau_dk</a></p>
					<p class="facebook"><a href="https://www.facebook.com/genau.dk">facebook.com/<br>genau.dk</a></p>
				</div>
				
				<div class="kontaktformular">
					<h3>Skriv til os</h3>
<?php echo do_shortcode( '[contact-form-7 id="11" title="Kontaktformular 1"]' ); ?>
				</div>
			
			</section>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>