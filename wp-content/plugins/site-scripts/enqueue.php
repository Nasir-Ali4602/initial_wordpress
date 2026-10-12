<?php
/*
Plugin Name: Barts Scripts Loader
Description: Enqueue Scripts
Version: 1.0
Author: Bartosz Klemensowski
Author URI: http://www.btkgraphics.com/
License: CC
*/
 
function loadScripts() {
 
    wp_enqueue_script('jquery');
    wp_register_script( 'docready', plugin_dir_url( __FILE__ ) . 'docReady.js?v=4', array('jquery'),'',true  );
    wp_register_script( 'colorbox', plugin_dir_url( __FILE__ ) . 'jquery.colorbox-min.js', array('jquery'),'',true  );
    wp_register_script( 'slickjs', plugin_dir_url( __FILE__ ) . 'slick.js', array('jquery'),'',true  );
    wp_register_style('slickcss', plugins_url('slick.css',__FILE__ ));
    wp_register_style('animate', plugins_url('animate.css',__FILE__ ));
    wp_register_style('colorboxstyle', plugins_url('colorbox.css',__FILE__ ));
    wp_register_style('slicktheme', plugins_url('slick-theme.css',__FILE__ ));
    wp_enqueue_style('slicktheme');
    wp_enqueue_style('colorboxstyle');
    wp_enqueue_style('animate');
    wp_enqueue_style('slickcss');
    wp_enqueue_script( 'slickjs' );
    wp_enqueue_script( 'docready' );
    wp_enqueue_script( 'colorbox' );
    
    
    
 
}
 
add_action( 'wp_enqueue_scripts', 'loadScripts' );

