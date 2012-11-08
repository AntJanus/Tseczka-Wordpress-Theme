
<aside id="sidebar" class="span3 offset1 "><!-- START SIDEBAR -->
    <div id="innerSide">
    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('main') ) : else : ?>
    <?php endif; ?>
    </div>
  </aside>