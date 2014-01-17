<?php ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<?php wp_head(); ?>
</head>

<body>

<div class="container">
	
	<div class="header column twelve">
		<div class="header_content column ten center"
		<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <img src="/wp-content/uploads/2013/07/Kemteck_Logo_white_blackshadow.fw_.png" id="logo" class="column two">
		</a>	
	
	<div class="menu column nine">
		<?php wp_nav_menu(array(
		'Header Menu' => 'header_menu',
		)); ?>
	</div><!--End of Menu-->
    </div><!--Header Content-->
	</div><!--Header-->