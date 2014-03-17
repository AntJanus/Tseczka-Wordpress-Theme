<?php
// search query clean up
function tseczka_nice_search_redirect() {
  if (is_search() && strpos($_SERVER['REQUEST_URI'], '/wp-admin/') === false && strpos($_SERVER['REQUEST_URI'], '/search/') === false) {
    wp_redirect(home_url('/search/' . str_replace(array(' ', '%20'), array('+', '+'), urlencode(get_query_var('s')))), 301);
      exit();
  }
}

add_action('template_redirect', 'tseczka_nice_search_redirect');

function tseczka_search_query($escaped = true) {
  $query = apply_filters('tseczka_search_query', get_query_var('s'));
  if ($escaped) {
      $query = esc_attr($query);
  }
  return urldecode($query);
}

add_filter('get_search_query', 'tseczka_search_query');

function tseczka_request_filter($query_vars) {
  if (isset($_GET['s']) && empty($_GET['s'])) {
    $query_vars['s'] = " ";
  }
  return $query_vars;
}

add_filter('request', 'tseczka_request_filter');


// remove dashboard widgets
function tseczka_remove_dashboard_widgets() {
  remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
  remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
  remove_meta_box('dashboard_primary', 'dashboard', 'normal');
  remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
}

add_action('admin_init', 'tseczka_remove_dashboard_widgets');

// limit post revisions
if (!defined('WP_POST_REVISIONS')) { define('WP_POST_REVISIONS', 5); }
update_option('uploads_use_yearmonth_folders', 0);
update_option('upload_path', 'assets');
