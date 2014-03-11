<?php
    $id = get_the_ID();
    $sidebar_id = get_post_meta($id, '_cmb_sidebar_switcher', true);

?>
<aside id="sidebar" class="large-4 columns"><!-- START SIDEBAR -->
    <div id="inner-side">
        <?php
        if(!empty($sidebar_id)) :
            if(function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-'.$sidebar_id)): ?>

            <?php
            endif;
        else:
            if(function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-1')):

            endif;
        endif;
        ?>
    </div>
  </aside>
