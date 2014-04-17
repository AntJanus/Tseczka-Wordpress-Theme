<?php
// SIDEBARS
register_sidebar(array('name'=>'footer-intro',
'before_widget' => '<div class="widget-list">',
'after_widget' => '</div>',
'before_title' => '<h4>',
'after_title' => '</h4>',
));

register_sidebar(array('name'=>'footer-left',
'before_widget' => '<div class="widget-list">',
'after_widget' => '</div>',
'before_title' => '<h4>',
'after_title' => '</h4>',
));
register_sidebar(array('name'=>'footer-mid',
'before_widget' => '<div class="widget-list">',
'after_widget' => '</div>',
'before_title' => '<h4>',
'after_title' => '</h4>',

));

register_sidebar(array('name'=>'footer-end',
'before_widget' => '<div class="widget-list">',
'after_widget' => '</div>',
'before_title' => '<h4>',
'after_title' => '</h4>',

));

for($i = 1; $i <= SIDEBAR_COUNT; $i++) {
    register_sidebar(array(
        'name'=>'sidebar-'.$i,
        'before_widget' => '<div class="widget-list">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
