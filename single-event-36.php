<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <main class="l-wrapper xl">

            <?php while (have_posts()) : the_post(); ?>

                <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail('full', ['class' => 'fade-on-load ', 'onload' => 'loadMediaOnLoad(this)']);
                    }
                ?>

                    <h1><?php the_title(); ?></h1>

                <?php get_template_part('modules/flex_init'); ?>

            <?php endwhile; ?>

    </main>

<?php endif; ?>

<?php get_footer(); ?>