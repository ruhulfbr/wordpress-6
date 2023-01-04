<?php
// Sidebar Register Function

function cdm_widgets_register(){
  register_sidebar([
    'name' => __('Main Widget Area', 'codemuseum'),
    'id'   => 'sideber-1',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'codemuseum'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ]);


  register_sidebar([
    'name' => __('Footer 1', 'codemuseum'),
    'id'   => 'footer-1',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'codemuseum'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ]);

  register_sidebar([
    'name' => __('Footer 2', 'codemuseum'),
    'id'   => 'footer-2',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'codemuseum'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ]);

  register_sidebar([
    'name' => __('Footer 3', 'codemuseum'),
    'id'   => 'footer-3',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'codemuseum'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ]);
}

add_action('widgets_init', 'cdm_widgets_register');
