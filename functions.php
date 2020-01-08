<?php
require_once('class-wp-bootstrap-navwalker.php');

function wpb_theme_setup(){
  //Nav menus
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));
}

add_action('after_setup_theme','wpb_theme_setup');

add_theme_support( 'post-thumbnails' ); 

function snerd_create_post_type() {
    register_post_type( 'disease',
        array (
            'labels' => array(
                'name' => '疾病專欄',
                'singular_name' => '疾病專欄',
            ),
            'public' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'supports' => array (
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'custom-fields',
            ),
        )
    );

  register_post_type( 'links',
        array (
            'labels' => array(
                'name' => '相關連結',
                'singular_name' => '相關連結',
            ),
            'public' => true,
            'menu_position' => 6,
            'has_archive' => true,
            'supports' => array (
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'custom-fields',
            ),
        )
    );
}

add_action ( 'init', 'snerd_create_post_type', 1);

function snerd_create_taxonomies() {

  $labels = array(
    'name'          => '研究專欄',
    'singular_name' => '研究專欄',
  );

  register_taxonomy( 'research', array( 'disease' ),
    array(
      'hierarchical' => false,
      'labels'       => $labels,
      'show_ui'      => true,
    )
  );

  $labels2 = array(
    'name'          => '連結分類',
    'singular_name' => '連結分類',
  );

  register_taxonomy( 'linkcategory', array( 'links' ),
    array(
      'hierarchical' => false,
      'labels'       => $labels2,
      'show_ui'      => true,
    )
  );

}
add_action( 'init', 'snerd_create_taxonomies', 0 );

 ?>
