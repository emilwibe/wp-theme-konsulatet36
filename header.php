<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- DEV -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="global-header" id="global-header">
        <div class="l-wrapper xl global-header-inner"><a href="<?php echo get_site_url(); ?>" class="logo-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/konsulatet36-logo.svg" alt="Logo" class="logo"></a>

            <?php get_template_part('modules/header/nav/global_nav'); ?>

        </div>
    </header>