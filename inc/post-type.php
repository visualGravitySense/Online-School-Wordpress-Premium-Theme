<?php

function intensiv_custompost_type_gallery() {
    $labels = array(
        'name'                  => 'Galleries',
        'singular_name'         => 'Gallery',
        
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'gallery' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
 
    register_post_type( 'gallery', $args );
}
 
add_action( 'init', 'intensiv_custompost_type_gallery' );



function intensiv_custompost_type_deals() {
    $labels = array(
        'name'                  => 'Deals',
        'singular_name'         => 'Deal',
        
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'deals' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
 
    register_post_type( 'deals', $args );
}
 
add_action( 'init', 'intensiv_custompost_type_deals' );



function intensiv_custompost_type_testimonials() {
    $labels = array(
        'name'                  => 'Testimonials',
        'singular_name'         => 'Testimonial',
        
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
 
    register_post_type( 'testimonial', $args );
}
 
add_action( 'init', 'intensiv_custompost_type_testimonials' );