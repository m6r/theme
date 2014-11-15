<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package M6R
 * @subpackage M6RTheme
 * @license AGPL
 * @since TwentyTwelve
 */
?>

<div class="container">
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
<!-- Version deux colonnes -->
<hr />
<div class="row">
    <?php dynamic_sidebar( 'footer-1' ); ?>
</div>


		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54526531-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
