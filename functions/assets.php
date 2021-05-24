<?php

function our_theme_assets() {

    // CSS
    wp_enqueue_style(
   	 'ixu-theme-css',
   	 get_bloginfo( 'stylesheet_directory' ) . '/style.css',
   	 false, // dependencies
   	 filemtime( get_template_directory() . '/style.css' ),
   	 false // media
    );

}

add_action( 'wp_enqueue_scripts', 'our_theme_assets' );

?>