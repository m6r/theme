<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package M6R
 * @subpackage M6RTheme
 * @license AGPL
 * @since TwentyTwelve
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />

  <!-- Bootstrap core CSS -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php

$menu_options = array(
  'menu'              => 'primary',
  'theme_location'    => 'primary',
  'depth'             => 2,
  'container'         => 'div',
  'container_class'   => 'collapse navbar-collapse',
  'container_id'      => 'bs-example-navbar-collapse-1',
  'menu_class'        => 'nav navbar-nav',
  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
  'walker'            => new wp_bootstrap_navwalker()
);

?>

<div class="navbar-wrapper">
    <div class="container">
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <?php wp_nav_menu($menu_options); ?>
          </div><!-- .container -->
        </div><!-- .navbar -->

    </div><!-- .container -->
</div><!-- .navbar-wrapper -->
