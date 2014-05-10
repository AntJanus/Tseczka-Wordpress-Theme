<?php

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );

function cmb_sample_metaboxes( array $meta_boxes ) {

    $prefix = '_cmb_';

    $sidebar_options[] = array('name' => 'Choose a sidebar', 'value' => null);

    for($i = 1; $i <= SIDEBAR_COUNT; $i++) {
        $sidebar_options[] = array(
                'name' => 'Sidebar-'.$i,
                'value' => 'sidebar-'.$i
                );
    }

    $meta_boxes[] = array(
        'id' => 'sidebar_switcher',
        'title' => 'Sidebar',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                    'name' => 'Sidebar',
                    'desc' => 'Sidebar switcher',
                    'id' => $prefix.'sidebar_switcher',
                    'type' => 'select',
                    'options' => $sidebar_options
                )
            )
        );

    return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

    if ( ! class_exists( 'cmb_Meta_Box' ) )
        require_once 'init.php';

}
