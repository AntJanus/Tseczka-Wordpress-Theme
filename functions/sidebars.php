<?php
// SIDEBARS
register_sidebar(array('name'=>'footer-intro',
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

register_sidebar(array('name'=>'footer-left',
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
register_sidebar(array('name'=>'footer-mid',
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',

));

register_sidebar(array('name'=>'footer-end',
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',

));

for($i = 1; $i <= SIDEBAR_COUNT; $i++) {
    register_sidebar(array(
        'name'=>'sidebar-'.$i,
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
