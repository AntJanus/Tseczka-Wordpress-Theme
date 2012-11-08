<?php
function add_filters($tags, $function) {
  foreach($tags as $tag) {
    add_filter($tag, $function);
  }
}

if (stristr($_SERVER['SERVER_SOFTWARE'], 'apache') !== false) {
  function tseczka_htaccess_writable() {
    if (!is_writable(get_home_path() . '.htaccess')) {
      if (current_user_can('administrator')) {
        add_action('admin_notices', create_function('', "echo '<div class=\"error\"><p>" . sprintf(__('Please make sure your <a href="%s">.htaccess</a> file is writable ', 'tseczka'), admin_url('options-permalink.php')) . "</p></div>';"));
      }
    };
  }

  add_action('admin_init', 'tseczka_htaccess_writable');

  // Rewrites DO NOT happen for child themes
  // rewrite /wp-content/themes/tseczka/css/ to /css/
  // rewrite /wp-content/themes/tseczka/js/  to /js/
  // rewrite /wp-content/themes/tseczka/img/ to /js/
  // rewrite /wp-content/plugins/ to /plugins/

  function tseczka_add_rewrites($content) {
    global $wp_rewrite;
    $tseczka_new_non_wp_rules = array(
	'plugins/(.*)'  => RELATIVE_PLUGIN_PATH . '/$1',
      'css/(.*)'      => THEME_PATH . '/css/$1',
      'js/(.*)'       => THEME_PATH . '/js/$1',
      'img/(.*)'      => THEME_PATH . '/img/$1',
      
    );
    $wp_rewrite->non_wp_rules = array_merge($wp_rewrite->non_wp_rules, $tseczka_new_non_wp_rules);
    return $content;
  }

  function tseczka_clean_urls($content) {
    if (strpos($content, FULL_RELATIVE_PLUGIN_PATH) === 0) {
      return str_replace(FULL_RELATIVE_PLUGIN_PATH, WP_BASE . '/plugins', $content);
    } else {
      return str_replace('/' . THEME_PATH, '', $content);
    }
  }

  // only use clean urls if the theme isn't a child or an MU (Network) install
  if (!is_multisite() && !is_child_theme()) {
    add_action('generate_rewrite_rules', 'tseczka_add_rewrites');
    add_action('generate_rewrite_rules', 'tseczka_add_h5bp_htaccess');
    if (!is_admin()) {
      $tags = array(
        'plugins_url',
        'bloginfo',
        'stylesheet_directory_uri',
        'template_directory_uri',
        'script_loader_src',
        'style_loader_src'
      );

      add_filters($tags, 'tseczka_clean_urls');
    }
  }

  // add the contents of h5bp-htaccess into the .htaccess file
  function tseczka_add_h5bp_htaccess($content) {
    global $wp_rewrite;
    $home_path = function_exists('get_home_path') ? get_home_path() : ABSPATH;
    $htaccess_file = $home_path . '.htaccess';
    $mod_rewrite_enabled = function_exists('got_mod_rewrite') ? got_mod_rewrite() : false;

    if ((!file_exists($htaccess_file) && is_writable($home_path) && $wp_rewrite->using_mod_rewrite_permalinks()) || is_writable($htaccess_file)) {
      if ($mod_rewrite_enabled) {
        $h5bp_rules = extract_from_markers($htaccess_file, 'HTML5 Boilerplate');
          if ($h5bp_rules === array()) {
            $filename = dirname(__FILE__) . '/res/replace_htaccess';
            return insert_with_markers($htaccess_file, 'HTML5 Boilerplate', extract_from_markers($filename, 'HTML5 Boilerplate'));
          }
      }
    }

    return $content;
  }

}