<?php
if (!defined('ABSPATH')) { exit; }

// OUTPUT SITE URL TO JS
function ew_head_output() {
    echo '<script>' . "\n";
    echo "\t" . 'let ew_site_url = "' . get_site_url() . "\";\n";
    echo "\t" . 'let ew_template_dir_uri = "' . get_template_directory_uri() . "\";\n";
    echo '</script>' . "\n";
}

add_action( 'wp_head', 'ew_head_output' );

/* THEME SUPPORT */
get_template_part( 'functions/ew_theme_support' );


/* ENQUEUED ASSETS */
get_template_part( 'functions/ew_enqueues' );

/* NAVIGATION */
get_template_part( 'functions/ew_navs' );

/* WIDGETS */
get_template_part( 'functions/ew_widgets' );

/* CUSTOM POST TYPES */
get_template_part( 'functions/ew_cpt_events' );

/* tinyMCE SETTINGS */
get_template_part( 'functions/ew_acf_tinyMCE' );

/* Helper functions */
get_template_part( 'functions/ew_helper_functions' );