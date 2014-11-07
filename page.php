<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package M6R
 * @subpackage M6RTheme
 * @since TwentyTwelve
 */

get_header(); ?>

<div id="page-container" class="container">
    <div class="row">
        <div id="content" role="main" class="col-md-8">


			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>

<?php if (isset($_GET['email']) ) { break; } ?>


			<?php endwhile; // end of the loop. ?>
        </div><!-- #content -->

        <?php get_sidebar(); ?>
    </div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>
