<?php
if (!defined('ABSPATH')) { exit; }

function ew_enqueues() {
    if( is_user_logged_in() ) {
        wp_enqueue_style( 'core-styles-dev', get_template_directory_uri() . '/dist/css/core.dev.css?' . time(), [], false,  );
    } else {
        wp_enqueue_style( 'core-styles', get_template_directory_uri() . '/dist/css/core.min.css?' . time(), [], false,  );
    }

    wp_enqueue_script( 'core-scripts-head', get_template_directory_uri() . '/dist/js/scripts-head.min.js?' . time(), [], false, false);
    wp_enqueue_script( 'core-scripts-footer', get_template_directory_uri() . '/dist/js/scripts-footer.min.js?' . time(), [], false, true);
}

add_action( 'wp_enqueue_scripts', 'ew_enqueues' );

/**
 * Registers an editor stylesheet for the theme.
 */
function ew_theme_add_editor_styles() {
    add_editor_style( "ew-editor-styles.css" );
}
add_action( 'admin_init', 'ew_theme_add_editor_styles' );