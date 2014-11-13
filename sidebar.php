<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package M6R
 * @subpackage M6RTheme
 * @license AGPL
 * @since TwentyTwelve
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="sidebar" class="col-md-4 widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #sidebar -->
	<?php endif; ?>
