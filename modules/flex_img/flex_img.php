<?php

if (!defined('ABSPATH')) { exit; }

$imgID = get_sub_field('ew_flex_img_img');
$flex_settings_width = get_sub_field('flex_settings_width');
?>

<section class="flex-mod flex-mod-outer flex-mod-img">
    <div class="flex-mod-inner l-wrapper <?php echo $flex_settings_width; ?>">

    <?php echo wp_get_attachment_image( $imgID, 'full', false, ['class' => 'fade-on-load ', 'onload' => 'loadMediaOnLoad(this)'] ); ?>

    </div><!--/.flex-mod-inner-->
</section><!--/.flex-mod-img-->