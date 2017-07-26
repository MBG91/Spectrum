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
 <nav class="navbar navbar-default nav-fixed-top" role="navigation" >
       <div class="container-fluid">
                               <div class="navbar-header"> <!-- .creation buttom -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar" area-expanded="false">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span> 
                                    </button>  
                               </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 io_xs"> <!-- adaptation mobile -->
                       <a href="a" class="navbar"><img src="<?php echo WP_UPLOAD_SUBDIR_URL.""."logo.png";?>" class="logo"/></a>
                    </div>

                   <div class="col-lg-8 col-md-8 col-sm-8 io_xs"> <!-- fit on laptop and mobile -->
                           <div class="collapse navbar-collapse" id="mynavbar"> <!-- appel du botton burger -->
                           <ul class="nav navbar-nav navbar-right"> 
                             <li class="nav-item"><a href="#header">HOME</a></li> 
                             <li class="nav-item"><a href="#about" class="dropdown-toggle" data-toggle="dropdown">ABOUT<b class="caret"></b></a>
                                 <ul class="dropdown-menu">
                                    <li><a href="#">Our Philosophy</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Details</a></li>        
                                 </ul>
                             <li class="nav-item"><a href="#portofolio" class="dropdown-toggle" data-toggle="dropdown">PORTOFOLIO<b class="caret"></b></a>
                                 <ul class="dropdown-menu"> 
                                    <li><a href="#">Wedding</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Destination</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Events</a></li>
                                 </ul>             
                             <li class="nav-item"><a href="#blog">BLOG</a></li> 
                             <li class="nav-item"><a href="#contact" class="dropdown-toggle" data-toggle="dropdown">CONTACT<b class="caret"></b></a>
                                 <ul class="dropdown-menu"> 
                                    <li><a href="#">Contact Information</a></li>
                               </ul>
                          </div>
                   </div>
               </div>
           </div>
    </nav> 

<div id="page" class="site">
<div id="content" class="site-content">