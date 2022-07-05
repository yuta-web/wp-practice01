<?php

function my_custom_menu_order($menu_order) {
  if (!$menu_order) return true;
  return array(
      'index.php',
      'edit.php?post_type=about',
			'edit.php?post_type=information_room',
			'edit.php?post_type=activity',
      'edit.php?post_type=amenity',
      'edit.php?post_type=menu',
      'edit.php?post_type=attention',
      'edit.php?post_type=rental',
      'edit.php?post_type=access',
      'edit.php?post_type=contact',
      'edit.php?post_type=footer',
      'edit.php',
      'edit.php?post_type=page',
      'edit-comments.php',
      'separator-last',
      'themes.php',
      'plugins.php',
      'users.php',
      'tools.php',
      'options-general.php',
  );
}
add_filter('custom_menu_order', 'my_custom_menu_order');
add_filter('menu_order', 'my_custom_menu_order');

function delete_jquery() {
  if (!is_admin()) {
    wp_deregister_script('jquery');
  }
}
add_action('init', 'delete_jquery');

function theme_name_files() {
  wp_enqueue_script('jquery',array(),true);
}
add_action( 'wp_enqueue_scripts', 'theme_name_files' );

function add_theme_scripts(){
	wp_enqueue_style("style",get_template_directory_uri()."/assets/css/style.css",array(),"1.0.0");
	wp_enqueue_script('jquery', get_theme_file_uri()."/assets/js/jquery.js",array(), '',true);
  wp_enqueue_script('js1', get_template_directory_uri()."/assets/js/main.js",array(), '1.0.0',true);
  wp_enqueue_script('js2', get_theme_file_uri()."/assets/js/polyfill.js",array(), '',true);
}
add_action("wp_enqueue_scripts","add_theme_scripts");

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );

?>