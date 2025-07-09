<?php
if (!defined('ABSPATH')) {
    exit;
}

$flex_settings_width = get_sub_field('flex_settings_width');

$args = [
    'post_type' => 'event-36'
];

$eventQuery = new WP_Query($args);
?>

<?php if ($eventQuery->have_posts()) : ?>

    <section class="flex-mod flex-mod-outer flex-mod-events">
        <div class="flex-mod-inner l-wrapper <?php echo $flex_settings_width; ?> s-fw">
            <div class="splide splide-events" role="group">
                <div class="splide__track">
                    <ul class="splide__list">

                    <?php while ($eventQuery->have_posts()) : $eventQuery->the_post(); ?>

                        <li class="splide__slide flex-event-item">
                            
                        <?php if( has_post_thumbnail() ) : ?>

                            <div class="flex-event-img-container">

                            <?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'full', false, ['class' => 'fade-on-load flex-event-img', 'onload' => 'loadMediaOnLoad(this)'] ); ?>

                            <div class="border-gradient"></div>
                            </div><!--/.event-img-container-->

                            <div class="flex-event-item-inner">

                            <h4><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4>

                            </div><!--/.flex-event-item-inner-->

                        <?php endif; ?>

                        </p></li><!--/.slide__slide-->

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                    </ul><!--/.splide__list-->
                </div><!--/.splide__track-->
            </div><!--/.splide-->
        </div><!--/.flex-mod-inner-->
    </section><!--/.flex-mod-wysiwyg-->

<?php endif; ?>