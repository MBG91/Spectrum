<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spectrum-agency
 */

?>

	</div> <!-- .site-info -->

	<footer id="colophon" role="content info">
	
	<nav class="navbar-default navbar-fixed-bottom">
	 <div class="container-fluid">
			
  <div class="row">
   <div class="col-lg-6 col-md-6 col-sm-6 io_xs">
    <div/ class="social-icons navbar-right" >      
   <a href="" class="social-icon"> <i class="fa fa-wechat"><img src="<?php echo WP_UPLOAD_SUBDIR_URL. "wechat.png";?>" class="logo"/></i></a>
  <a href="" class="social-icon"> <i class="fa fa-weibo"><img src="<?php echo WP_UPLOAD_SUBDIR_URL. "weibo.png";?>" class="logo"/></i></a>
  <a href="" class="social-icon"> <i class="fa fa-phone"><img src="<?php echo WP_UPLOAD_SUBDIR_URL. "phone.png";?>" class="logo"/></i></a>
  <a href="" class="social-icon"> <i class="fa fa-mail"><img src="<?php echo WP_UPLOAD_SUBDIR_URL. "email.png";?>" class="logo"/></i></a>
  <a href="" class="social-icon"> <i class="fa fa-ig"><img src="<?php echo WP_UPLOAD_SUBDIR_URL. "instagram.png";?>" class="logo"/></i></a>
  <a href="" class="social-icon"> <i class="fa fa-facebook"><img src="<?php echo WP_UPLOAD_SUBDIR_URL."facebook.png";?>" class="logo"/></i></a>
  <a href="" class="social-icon"> <i class="fa fa-pinterest"><img src="<?php echo WP_UPLOAD_SUBDIR_URL."pinterest.png";?>" class="logo"/></i></a>
</div>
</div>
</div>			
		</div> <!-- .site-info -->
        </nav>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html