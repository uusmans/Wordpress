<?php
function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'extra-menu' => __('Extra Menu'),
      'secondary' => __('Secondary Navigation', 'twentyten')
    )
  );
}
add_action('init', 'register_my_menus');
function adv_them_support()
{
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}
add_filter('after_setup_theme', 'adv_them_support');
function custom_length()
{
  return 30;
}
add_filter('excerpt_length', 'custom_length');

add_filter('get_search_form', 'my_search_form_text');

function my_search_form_text($text)
{
  $text = str_replace('value=""', 'value=""', $text); //set as value the text you want
  return $text;
}
function init_widgets($id)
{
  register_sidebar(
    array(
      'name' => 'Side Bar',
      'id' => 'sidebar',
      'before_widget' => '<div class="block side-widget" >',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Show Case',
      'id' => 'showcase',
      'before_widget' => '<div class="showcase" >',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Box One',
      'id' => 'boxone',
      'before_widget' => '<div class="boxone" >',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Box Two',
      'id' => 'boxtwo',
      'before_widget' => '<div class="boxtwo" >',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Box Three',
      'id' => 'boxthree',
      'before_widget' => '<div class="boxthree" >',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    )
  );
}
add_action('widgets_init', 'init_widgets');
?>