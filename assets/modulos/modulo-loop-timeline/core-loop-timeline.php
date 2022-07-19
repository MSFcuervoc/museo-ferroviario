<?php  /*  slider home */


function loop_timeline_register() {

    $labels = array(
        'name' => _x('loop-timeline', 'post type general name'),
        'singular_name' => _x('loop-timeline', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'loop-timeline item'),
        'add_new_item' => __('Agregar nuevo loop-timeline'),
        'edit_item' => __('Editar loop-timeline'),
        'new_item' => __('Nuevo loop-timeline'),
        'view_item' => __('Ver el loop-timeline'),
        'search_items' => __('Buscar loop-timeline'),
        'not_found' =>  __('No se encontro loop-timeline'),
        'not_found_in_trash' => __('No se encontro en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-games',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'excerpt', 'thumbnail'),
        'rewrite' => array('slug' => 'loop-timeline', 'with_front' => FALSE)
      ); 

    register_post_type( 'loop_timeline' , $args );
}

add_action('init', 'loop_timeline_register');