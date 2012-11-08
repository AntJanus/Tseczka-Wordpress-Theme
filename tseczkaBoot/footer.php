<footer>
<div id="innerFooter" class="container">
<div class="row">
<div class="span3">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footerIntro') ) : else : ?>

			<?php endif; ?>
</div>
<div class="span2">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footerLeft') ) : else : ?>

			<?php endif; ?>
</div>
<div class="span2">

     		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footerMid') ) : else : ?>

			<?php endif; ?>
</div>
<div class="span2">

				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footerRight') ) : else : ?>



				<?php endif; ?>
</div>
<div class="span3">

				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footerEnd') ) : else : ?>



				<?php endif; ?>
</div>
</div>
</div>
</footer>

<div id="footerCopy" class="container">
<div class="row">
<div class="span6">
2011 &copy; Antonin Januska&nbsp;&nbsp;&nbsp;<a href="http://antjanus.com"><img src="<?php echo get_template_directory_uri(); ?>/images/themes.png" style="vertical-align:middle; height: 24px; padding: 10px;" /></a>
</div>
 <div id="footNav" class="span4 offset2">	<?php wp_nav_menu( array('menu' => 'footerNav', 'depth' => 1, 'menu_class'      => 'nav nav-pills' )); ?> </div>
 </div>
 </div>