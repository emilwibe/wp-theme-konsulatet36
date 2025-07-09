<?php
if (!defined('ABSPATH')) { exit; }

add_action('widgets_init', function(){
    
    register_sidebar(array(
        'name' => __('Footer Area 1'),
        'id' => 'footer-area-1',
        'before_widget' => '<div class="footer-area footer-widget-1">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-area-heading">',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => __('Footer Area 2'),
        'id' => 'footer-area-2',
        'before_widget' => '<div class="footer-area footer-widget-2">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-area-heading">',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => __('Footer Area 3'),
        'id' => 'footer-area-3',
        'before_widget' => '<div class="footer-area footer-widget-3">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-area-heading">',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => __('Footer Area 4'),
        'id' => 'footer-area-4',
        'before_widget' => '<div class="footer-area footer-widget-4" id="kontakt">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-area-heading">',
        'after_title' => '</h4>'
    ));

    /*register_sidebar(array(
        'name' => __('Footer Area 5'),
        'id' => 'footer-area-5',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-area-heading">',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => __('Footer Area 6'),
        'id' => 'footer-area-6',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-area-heading">',
        'after_title' => '</h4>'
    ));*/

});