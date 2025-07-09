<?php
if (!defined('ABSPATH')) {
    exit;
}

$flex_settings_width = get_sub_field('flex_settings_width');
?>

<section class="flex-mod flex-mod-outer flex-mod-img">
    <div class="flex-mod-inner l-wrapper <?php echo $flex_settings_width; ?>">

        <?php the_sub_field('ew_flex_wysiwyg_editor'); ?>

    </div><!--/.flex-mod-inner-->
</section><!--/.flex-mod-wysiwyg-->