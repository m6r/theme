<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="page-container" class="container">
	<div class="row">
		<div id="content" role="main" class="col-md-8">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

				<?php /*<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'm6r' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'm6r' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'm6r' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->*/?>

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->

		<?php get_sidebar(); ?>
	</div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>
