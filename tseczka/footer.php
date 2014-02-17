<footer>
<div id="inner-footer" class="row">
<div class="large-6 columns" id="footer-intro">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footerIntro') ) : else : ?>

			<?php endif; ?>
</div>
<div class="large-2 columns" id="footer-left">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footerLeft') ) : else : ?>

			<?php endif; ?>
</div>
<div class="large-2 columns" id="footer-mid">

     		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footerMid') ) : else : ?>

			<?php endif; ?>
</div>
<div class="large-2 columns" id="footer-right">

				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footerRight') ) : else : ?>



				<?php endif; ?>
</div>
</div>
</footer>

<div id="footer-copy" class="row">
<div class="large-6 columns">
2011 &copy; Antonin Januska&nbsp;&nbsp;&nbsp;<a href="http://antjanus.com"><img src="<?php echo get_template_directory_uri(); ?>/images/themes.png" /></a>
</div>
 <div id="foot-nav" class="large-6 columns">	<?php wp_nav_menu( array('theme_location' => 'footerNav', 'depth' => 1 )); ?> </div>
 </div>
