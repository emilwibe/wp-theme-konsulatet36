<?php
if (!defined('ABSPATH')) { exit; }

if(have_rows('ew_flex_content')) {
    while(have_rows('ew_flex_content')) {
        the_row();

        if( get_row_layout() == 'ew_flex_img' ) {
            get_template_part('modules/flex_img/flex_img');
        } elseif( get_row_layout() == 'ew_flex_wysiwyg' ) {
            get_template_part( 'modules/flex_wysiwyg/flex_wysiwyg' );
        } elseif ( get_row_layout() == 'ew_flex_events' ) {
            get_template_part( 'modules/flex_events/flex_events' );
        }
    }
}