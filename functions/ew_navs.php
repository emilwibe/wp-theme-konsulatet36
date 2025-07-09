<?php
if (!defined('ABSPATH')) { exit; }

//REGISTER MENUS
add_action('init', 'ew_add_menus');

function ew_add_menus()
{
    register_nav_menus(array(
        'nav_primary' => __('Primær Navigation', 'konsulatet36')
    ));
}