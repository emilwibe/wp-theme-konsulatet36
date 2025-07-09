<?php
if (!defined('ABSPATH')) { exit; }

add_theme_support( 'title-tag' );

add_theme_support( 'html5', array(
    // Any or all of these.
    'comment-list', 
    'comment-form',
    'search-form',
    'gallery',
    'caption',
    'style',
    'script'
) );

add_theme_support( 'post-thumbnails', [
    'post',
    'page',
    'event-36'
] );