<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <main>

            <?php while (have_posts()) : the_post(); ?>

            <section class="l-wrapper m index-introduction">

            <?php
            if(get_field('index_manchet')){
                the_field('index_manchet');
            }

            if(get_field('index_heading_primary')) {
                echo '<h1>' . get_field('index_heading_primary') . '</h1>';
            }
            ?>

            </section><!--/.index-introduction-->

            

                <?php /*if (get_field('index_video')) : ?>

                    <div class="index-video-container">

                        <video class="index-video fade-on-load" onloadeddata="loadMediaonLoad(this)" src="<?php echo wp_get_attachment_url(get_field('index_video')); ?>" autoplay muted loop>

                        </video>

                    </div><!--/.index-video-container-->

                <?php endif;*/?>

                <?php if (get_field('index_wysiwyg')) : ?>

                    <div class="wysiwyg-container index-wysiwyg-container">

                        <?php //the_field('index_wysiwyg'); ?>

                    </div><!--/.wysiwyg-container-->

                <?php endif; ?>

            <?php endwhile; ?>

    </main>

<?php endif; ?>

<?php get_footer(); ?>