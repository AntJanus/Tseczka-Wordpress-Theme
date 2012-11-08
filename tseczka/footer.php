<footer>
<div id="innerFooter" class="container">
<div class="grid_3" id="footer-intro">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footerIntro') ) : else : ?>

			<?php endif; ?>
</div>
<div class="grid_2" id="footer-left">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footerLeft') ) : else : ?>

			<?php endif; ?>
</div>
<div class="grid_2" id="footer-mid">

     		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footerMid') ) : else : ?>

			<?php endif; ?>
</div>
<div class="grid_2" id="footer-right">

				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footerRight') ) : else : ?>



				<?php endif; ?>
</div>
<p>&nbsp;</p>
<div class="clearfix"></div>
</div>
</footer>

<div id="footerCopy" class="container">
<div class="grid_6">
2011 &copy; Antonin Januska&nbsp;&nbsp;&nbsp;<a href="http://antjanus.com"><img src="<?php echo get_template_directory_uri(); ?>/images/themes.png" /></a>
</div>
 <div id="footNav" class="grid_6">	<?php wp_nav_menu( array('theme_location' => 'footerNav', 'depth' => 1 )); ?> </div>
 <div class="clearfix"></div>
 </div>