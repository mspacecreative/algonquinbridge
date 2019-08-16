<?php if ( ! isset( $_SESSION ) ) session_start(); ?>

<!DOCTYPE html>

<!--[if IE 6]>

<html id="ie6" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 7]>

<html id="ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html id="ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<head>

	<!-- MEDIA TEMPLE -->

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<title><?php elegant_titles(); ?></title>

	<?php elegant_description(); ?>

	<?php elegant_keywords(); ?>

	<?php elegant_canonical(); ?>



	<?php do_action( 'et_head_meta' ); ?>



	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



	<?php $template_directory_uri = get_template_directory_uri(); ?>

	<!--[if lt IE 9]-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script>
	<!--[endif]-->



	<script type="text/javascript" src="//use.typekit.net/jrw2vsv.js"></script>

	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/images/touch.png" rel="apple-touch-icon" sizes="144x144" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/images/android.png" rel="icon" sizes="192x192" />



	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />



	<script type="text/javascript">

		document.documentElement.className = 'js';

	</script>



	<?php wp_head(); ?>



	<script src="//use.typekit.net/joc0nnn.js"></script>

	<script>try{Typekit.load();}catch(e){}</script>

</head>

<body <?php body_class(); ?>>
	<div class="mobile-tel-buttons">
		<a href="tel:12262134707">Direct Line<i class="fa fa-phone" aria-hidden="true"></i></a>
		<a href="tel:18442743535">24-HR Emergency Response<i class="fa fa-phone" aria-hidden="true"></i></a>
	</div>
	<div class="top-strip">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-bg-2.png" />
	</div>
	
	<button class="checkbox"><i class="fa fa-phone" aria-hidden="true"></i></button>

	<header id="main-header">

		<div class="container">
			<div class="desktop-numbers">
				<p>Direct Line: <a href="tel:12262134707">1-226-213-4707</a> &nbsp;|&nbsp; 24-Hour Emergency Response Line: <a href="tel:18442743535">1-844-274-3535</a></p>
			</div>

			<div class="inner clearfix">
				<?php
					$logo = ( $user_logo = et_get_option( 'divi_logo' ) ) && '' != $user_logo
						? $user_logo
						: $template_directory_uri . '/images/logo.png';
				?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo" />
					</a>

					<div id="top-navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>
					</div>

					<div id="main-navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</div> <!-- #et-top-navigation -->
			</div>

		</div> <!-- .container -->

	</header> <!-- #main-header -->

