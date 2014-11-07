<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

<?php
	$args = array( 'post_type' => 'm6r_banniere', 'posts_per_page' => 1);
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <?php the_post_thumbnail( array(1500, 500) ); ?>
          <div class="container">
            <div class="col-sm-4 bloc-adhesion">
              <div class="row">
                  <!-- ICI EST L'IMAGE D'EN TÊTE ! -->
                  <?php if (get_header_image()) { ?>
                  <a href="/2014/09/je-signe-pour-6e-republique/">
                    <img src="http://www.m6r.fr/wp-content/uploads/2014/09/m6r-logo.png" />
                  </a>
                  <?php } ?>
              </div>
            </div>
            <div class="col-sm-8 article">
              <div class="carousel-caption">
                <span style="font-size: 44pt;"><?php the_title(); ?></span>
                <span style="font-size: 40pt;"><?php the_content(); ?></span>
              </div>
              <div class="social">
                <div class="fb-btn">
                  <div id="fb-root"></div>
                  <script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
                  <div class="fb-like" data-href="https://facebook.com/M6Rep" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
                <br />
                </div>
                <div class="twitter-btn">
                  <a href="https://twitter.com/M6Rep" class="twitter-follow-button" data-show-count="false" data-lang="fr">Suivre @M6Rep</a>
                  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
	endwhile;
?>

<div id="page-container" class="container marketing">
	<div class="row">
        <?php
        $args = array(
            'tax_query' => array(
                array(
                    'taxonomy' => 'post_format',
                    'field' => 'slug',
                    'terms' => array('post-format-video'),
                    'operator' => 'NOT IN'
                )
            )
        );
        query_posts('cat=1');
        ?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
				if (!get_post_format() || get_post_format === 'standard') {
					get_template_part( 'medaillon', get_post_format() );
				}
				?>
			<?php endwhile; ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">

			<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'No posts to display', 'm6r' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'm6r' ), admin_url( 'post-new.php' ) ); ?></p>
				</div><!-- .entry-content -->

			<?php else :
				// Show the default message to everyone else.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'm6r' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'm6r' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>

			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>

	</div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>