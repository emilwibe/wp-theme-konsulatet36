<?php
if (!defined('ABSPATH')) {
    exit;
}

// FORMAT SELECT IN tinyMCE
add_filter('tiny_mce_before_init', function ($settings) {

    $settings['block_formats'] = 'Tekst=p;Overskrift 2=h2;Overskrift 3=h3;Overskrift 4=h4;Overskrift 5=h5;Overskrift 6=h6';

    return $settings;
});

add_filter('acf/fields/wysiwyg/toolbars', 'ew_toolbars');
function ew_toolbars($toolbars) {
    // Uncomment to view format of $toolbars
    /*
    echo '< pre >';
        print_r($toolbars);
    echo '< /pre >';
    die;
    */

    // Add a new toolbar called "Very Simple"
    // - this toolbar has only 1 row of buttons
    $toolbars['36'] = array();
    $toolbars['36'][1] = [
        'formatselect',
        'numlist',
        'bullist',
        'blockquote',
        'link',
        'custom_class',
        'removeformat'
    ];
    $toolbars['36-limited'] = array();
    $toolbars['36-limited'][1] = [
        'bold',
        'italic',
        'link',
        'removeformat'
    ];

    // Edit the "Full" toolbar and remove 'code'
    // - delet from array code from http://stackoverflow.com/questions/7225070/php-array-delete-by-value-not-key
    if (($key = array_search('code', $toolbars['Full'][2])) !== false) {
        unset($toolbars['Full'][2][$key]);
    }

    // remove the 'Basic' toolbar completely
    unset($toolbars['Basic']);

    // return $toolbars - IMPORTANT!
    return $toolbars;
}

/*
tinyMCE TOOLBAR OPTIONS

[0] => formatselect
[1] => bold
[2] => italic
[3] => bullist
[4] => numlist
[5] => blockquote
[6] => alignleft
[7] => aligncenter
[8] => alignright
[9] => link
[10] => wp_more
[11] => spellchecker
[12] => fullscreen
[13] => wp_adv

[0] => strikethrough
[1] => hr
[2] => forecolor
[3] => pastetext
[4] => removeformat
[5] => charmap
[6] => outdent
[7] => indent
[8] => undo
[9] => redo
[10] => wp_help

*/


add_filter('mce_css', 't5_fresh_editor_style');

/**
 * Adds a parameter of the last modified time to all editor stylesheets.
 *
 * @wp-hook mce_css
 * @param  string $css Comma separated stylesheet URIs
 * @return string
 */
function t5_fresh_editor_style($css) {
    global $editor_styles;

    if (empty($css) or empty($editor_styles)) {
        return $css;
    }

    // Modified copy of _WP_Editors::editor_settings()
    $mce_css   = array();
    $style_uri = get_stylesheet_directory_uri();
    $style_dir = get_stylesheet_directory();

    if (is_child_theme()) {
        $template_uri = get_template_directory_uri();
        $template_dir = get_template_directory();

        foreach ($editor_styles as $key => $file) {
            if ($file && file_exists("$template_dir/$file")) {
                $mce_css[] = add_query_arg(
                    'version',
                    filemtime("$template_dir/$file"),
                    "$template_uri/$file"
                );
            }
        }
    }

    foreach ($editor_styles as $file) {
        if ($file && file_exists("$style_dir/$file")) {
            $mce_css[] = add_query_arg(
                'version',
                filemtime("$style_dir/$file"),
                "$style_uri/$file"
            );
        }
    }

    return implode(',', $mce_css);
}