<?php

/**
 * Functions.
 */


 function tema_ied_enqueue_scripts_and_styles() {
    // Inlcudo foglio di stile principlae
    wp_enqueue_style( 'style', get_stylesheet_uri( 'style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'), 'all') );
    wp_enqueue_script( 'index', get_template_directory_uri() . '/assets/js/index.js', array(), wp_get_theme()->get('Version'), true );
 }

 add_action('wp_enqueue_scripts', 'tema_ied_enqueue_scripts_and_styles');

 function tema_ied_after_setup_theme() {

   //aggiungo supporto per menu dinamici
   add_theme_support( 'menus' );

   // aggiungo supporto per il Title nell'head
   add_theme_support( 'title-tag' );

   //registro menu di navigazione dinamici
      register_nav_menus(
         array(
            'main-menu' => 'Main Menu',
            //'footer-menu' => 'Footer Menu',
            //'social-menu' => 'Social Menu',
         )
      );
 }

 add_action('after_setup_theme', 'tema_ied_after_setup_theme');
?>