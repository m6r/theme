<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package M6R
 * @subpackage M6RTheme
 * @since M6RTheme
 */

get_header(); ?>

<div id="page-container" class="container">
    <div class="row text-center">
        <?php if ( have_posts() ) : ?>

            <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();

                /* Include the post format-specific template for the content. If you want to
                 * this in a child theme then include a file called called content-___.php
                 * (where ___ is the post format) and that will be used instead.
                 */
            ?>
            <div class="col-md-12">
            <?php get_template_part( 'content', get_post_format() ); ?>

            </div>
            <?php
            endwhile;

            m6r_content_nav( 'nav-below' );
            ?>

        <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>

    </div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>
