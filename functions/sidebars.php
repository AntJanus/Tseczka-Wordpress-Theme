<?php
// SIDEBARS
register_sidebar(array('name'=>'footer-intro',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

register_sidebar(array('name'=>'footer-left',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
register_sidebar(array('name'=>'footer-mid',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',

));

register_sidebar(array('name'=>'footer-end',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',

));

for($i = 1; $i <= SIDEBAR_COUNT; $i++) {
    register_sidebar(array(
        'name'=>'sidebar-'.$i,
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
