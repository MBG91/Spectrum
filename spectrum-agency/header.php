<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spectrum-agency
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class = "container">
	<div class = "box">
			<img src="<?php echo WP_UPLOAD_SUBDIR_URL.""."logo.jpg";?>" class="logo"/>
		
	</div>
	<div class = "box box-navbar"> 
		<ul>
			<li><a href="home.html" class = "navbar">HOME</a></li>
			<li><a href="about.html" class = "navbar">ABOUT</a> </li>
			<li><a href="portfolio.html" class = "navbar">PORTFOLIO</a></li> 
			<li><a href="blog.html" class = "navbar">BLOG</a></li>
			<li><a href="contact.html" class = "navbar">CONTACT</a></li>
		</ul>
	</div>

	</div>
</div>
<div id="page" class="site">
<div id="content" class="site-content">

