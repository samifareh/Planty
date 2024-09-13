<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome','simple-line-icons','oceanwp-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

/* FONCTION HOOK PLANTY */

function add_new_menu($items, $args) {

    // Vérifie si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Crée un lien "Admin" pour les utilisateurs connectés
        $admin_link = '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';
        // Ajoute le lien "Admin" au menu existant
        $items .= $admin_link;
    }

    // Retourne les éléments du menu
    return $items;
}
// Applique le filtre pour modifier les items du menu
add_filter('wp_nav_menu_items','add_new_menu', 10, 2 );