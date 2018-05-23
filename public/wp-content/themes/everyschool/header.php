<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package everyschool
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<div id="page" class="site">

	<nav id="site-navigation" class="main-navigation">
		<div class="content-container">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><strong>#Every</strong>School</a></h1>

		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i><?php esc_html_e( '', 'everyschool' ); ?></button>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
	</div>
	</nav><!-- #site-navigation -->

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'everyschool' ); ?></a>

	<header id="masthead" class="site-header intro">

		<div class="site-branding intro-body">
			<?php
			$everyschool_description = get_bloginfo( 'description', 'display' );
			if ( $everyschool_description || is_customize_preview() ) :
				?>
				<div id="site-banner">
					<div class="content-container">



				                        <h1 class="brand-heading">Unsafe Speeds at 2000+ Schools</h1>
				                        <p class="intro-text"><?php echo $everyschool_description; /* WPCS: xss ok. */ ?></p>
				    <a href="https://campaigns.transalt.org/petition/unsafe-speeds-2000-schools" target="_blank" class="primary-action btn btn-primary btn-lg">Take Action</a> <br>  <br>





					</div>
			</div>




			<?php endif; ?>
		</div><!-- .site-branding -->


	</header><!-- #masthead -->
<div class="black-bg">
	<div class="content-container attribution">


<p><em>The #EverySchool Campaign is a project of Transportation Alternatives and Families for Safe Streets</em></p>

			 <img src="/wp-content/themes/everyschool/img/logo-ta.png" width="150" style="margin-right: 20px;"> <img src="/wp-content/themes/everyschool/img/logo-families.png" width="45">

</div>
</div>

	<div id="content" class="site-content">
