<?php 
function motaphoto_register_assets(){

// Déclarer fichier scripts.js 
wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0', true);
// Declarer fichier main.css
wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.0');

}
add_action( 'wp_enqueue_scripts', 'motaphoto_register_assets' );

// Déclarer mon menu nav 

function register_my_menu() {
    register_nav_menu( 'main-menu', __( 'Menu principal', 'text-domain' ) );
    register_nav_menu( 'footer-menu', __( 'Pied de page ', 'text-domain' ) );
}
add_action( 'after_setup_theme', 'register_my_menu' );


