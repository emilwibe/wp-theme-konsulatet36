<?php
if (!defined('ABSPATH')) {
    exit;
}
//setlocale(LC_TIME, array('da_DA.UTF-8','da_DA@euro','da_DA','danish'));

$flex_settings_width = get_sub_field('flex_settings_width');

$date_now = date('Y-m-d H:i:s');
$time_now = strtotime($date_now);

$time_next_year = strtotime('+365 day', $time_now);
$date_next_year = date('Y-m-d H:i:s', $time_next_year);

// FOR EVENTS WITH A DATE
$args_future = [
    'post_type' => 'event-36',
    'posts_per_page' => -1,
    'order' => 'DESC',
    'meta_query' => array(
        array(
            'key' => 'event_datetime',
            'compare' => 'BETWEEN',
            'value' => array($date_now, $date_next_year),
            'type' => 'DATETIME'
        ),
        'orderby' => 'meta_value',
        'meta_key' => 'event_datetime',
        'meta_type' => 'DATETIME'

    ),
];

// FOR EVENTS THAT OCCUR WEEKLY
$args_weekly = [
    'post_type' => 'event-36',
    'posts_per_page' => -1,
    'order' => 'DESC',
];

$eventQuery = new WP_Query($args_future);
$eventWeeklyQuery = new WP_Query($args_weekly);
?>

<?php if ($eventQuery->have_posts() || $eventWeeklyQuery->have_posts()) : ?>

    <section class="flex-mod flex-mod-outer flex-mod-events">
        <div class="flex-mod-inner l-wrapper <?php echo $flex_settings_width; ?> s-fw">
            <div class="splide splide-events" role="group">
                <div class="splide__track">
                    <ul class="splide__list">

                        <?php while($eventWeeklyQuery->have_posts()) : $eventWeeklyQuery->the_post(); ?>

                            <?php if(get_field('event_weekdays')) : ?>

                                <?php
                                $event_weekdays = get_field('event_weekdays');
                                //var_dump($event_weekdays);
                                ?>

                                <li class="splide__slide flex-event-item">

                                <?php if (has_post_thumbnail()) : ?>

                                    <div class="flex-event-img-container">

                                        <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'full', false, ['class' => 'fade-on-load flex-event-img', 'onload' => 'loadMediaOnLoad(this)']); ?>

                                        <div class="border-gradient"></div>
                                    </div><!--/.event-img-container-->

                                    <div class="flex-event-item-inner">

                                        <h4><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4>

                                        <div class="flex-item-time-container">

                                            <time class="flex-event-date" datetime="">
                                            <?php
                                            foreach ($event_weekdays as $weekday) {
                                                echo $weekday["label"] . " ";
                                            }
                                            ?>

                                            </time>

                                        </div><!--/.flex-item-time-container-->

                                    </div><!--/.flex-event-item-inner-->

                                <?php endif; ?>

                            </li><!--/.slide__slide-->

                            <?php endif; // WEEKLY FIELD ?>

                        <?php endwhile; ?>

                        <?php while ($eventQuery->have_posts()) : $eventQuery->the_post(); ?>
                            <?php
                            $event_start = get_field('event_datetime');
                            $event_start_datetime = date_create($event_start);
                            $event_start_year = date_format($event_start_datetime, "Y");
                            $event_start_month = date_format($event_start_datetime, "n");
                            $event_start_date = date_format($event_start_datetime, "j.");
                            $event_start_time = date_format($event_start_datetime, "H:i");

                            ?>

                            <li class="splide__slide flex-event-item">

                                <?php if (has_post_thumbnail()) : ?>

                                    <div class="flex-event-img-container">

                                        <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'full', false, ['class' => 'fade-on-load flex-event-img', 'onload' => 'loadMediaOnLoad(this)']); ?>

                                        <div class="border-gradient"></div>
                                    </div><!--/.event-img-container-->

                                    <div class="flex-event-item-inner">

                                        <h4><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4>

                                        <div class="flex-item-time-container">

                                            <time class="flex-event-date" datetime="<?php echo $event_start; ?>"><?php echo $event_start_date; ?> <?php ew_print_month("DK", $event_start_month); ?></time>
                                            <time class="flex-event-time" datetime="<?php echo $event_start; ?>"><?php echo $event_start_time; ?></time>

                                        </div><!--/.flex-item-time-container-->

                                    </div><!--/.flex-event-item-inner-->

                                <?php endif; ?>

                            </li><!--/.slide__slide-->

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                    </ul><!--/.splide__list-->
                </div><!--/.splide__track-->
            </div><!--/.splide-->
        </div><!--/.flex-mod-inner-->
    </section><!--/.flex-mod-wysiwyg-->

<?php endif; ?>