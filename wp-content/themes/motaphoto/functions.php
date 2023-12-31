<?php 
function motaphoto_register_assets(){

// Déclarer fichier scripts.js 
wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0', true);
// Declarer fichier main.css
wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.0');

}
add_action( 'wp_enqueue_scripts', 'motaphoto_register_assets' );