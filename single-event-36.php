<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <main class="l-wrapper xl">

            <?php while (have_posts()) : the_post(); ?>

                <?php if (!is_front_page()) : ?>

                    <h1><?php the_title(); ?></h1>

                <?php endif; ?>

                <div class="content">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>

    </main>

<?php endif; ?>

<?php get_footer(); ?>