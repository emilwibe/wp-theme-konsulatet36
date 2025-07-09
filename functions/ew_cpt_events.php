<?php
if (!defined('ABSPATH')) { exit; }

if (!function_exists('cpt_harders_event')) {

    // Register Custom Post Type
    function ew_cpt_36_event()
    {

        $labels = array(
            'name'                  => _x('Event', 'Post Type General Name', 'konsulatet36'),
            'singular_name'         => _x('Event', 'Post Type Singular Name', 'konsulatet36'),
            'menu_name'             => __('Events', 'konsulatet36'),
            'name_admin_bar'        => __('Events', 'konsulatet36'),
            'archives'              => __('Event-arkiv', 'konsulatet36'),
            'attributes'            => __('Event egenskaber', 'konsulatet36'),
            'parent_item_colon'     => __('Parent Event:', 'konsulatet36'),
            'all_items'             => __('Alle Events', 'konsulatet36'),
            'add_new_item'          => __('Tilføj Nyt Event', 'konsulatet36'),
            'add_new'               => __('Tilføj Event', 'konsulatet36'),
            'new_item'              => __('Nyt Event', 'konsulatet36'),
            'edit_item'             => __('Rediger Event', 'konsulatet36'),
            'update_item'           => __('Opdater Event', 'konsulatet36'),
            'view_item'             => __('Se Event', 'konsulatet36'),
            'view_items'            => __('Se Events', 'konsulatet36'),
            'search_items'          => __('Søg Event', 'konsulatet36'),
            'not_found'             => __('Ingen fundet', 'konsulatet36'),
            'not_found_in_trash'    => __('Ingen fundet i papirkurv', 'konsulatet36'),
            'featured_image'        => __('Fremhævet billede', 'konsulatet36'),
            'set_featured_image'    => __('Vælg fremhævet billede', 'konsulatet36'),
            'remove_featured_image' => __('Fjern fremhævet billede', 'konsulatet36'),
            'use_featured_image'    => __('Anvend som fremhævet billede', 'konsulatet36'),
            'insert_into_item'      => __('Insert into item', 'konsulatet36'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'konsulatet36'),
            'items_list'            => __('Items list', 'konsulatet36'),
            'items_list_navigation' => __('Items list navigation', 'konsulatet36'),
            'filter_items_list'     => __('Filter items list', 'konsulatet36'),
        );
        $args = array(
            'label'                 => __('Event', 'konsulatet36'),
            'description'           => __('Events', 'konsulatet36'),
            'labels'                => $labels,
            'supports'              => array('title', 'editor', 'thumbnail', 'revisions'),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'show_in_rest'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-calendar-alt',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page'
        );
        register_post_type('event-36', $args);
    }

    add_action('init', 'ew_cpt_36_event', 0);
}