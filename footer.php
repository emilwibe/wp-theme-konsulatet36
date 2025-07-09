<footer class="footer-primary">
    <div class="l-wrapper xl l-grid-12">

        <?php dynamic_sidebar('footer-area-1'); ?>

        <?php dynamic_sidebar('footer-area-2'); ?>

        <?php dynamic_sidebar('footer-area-3'); ?>

        <?php dynamic_sidebar('footer-area-4'); ?>

    </div><!--/.l-wrapper-->

    <div class="l-wrapper xl colophone">
        <a href="https://ew.dk" target="_blank">EW Web</a>
    </div>
</footer>

<?php if (is_front_page()) : ?>

    <div id="particles-js"></div><!--/#particles-js-->

<?php endif; ?>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "<?php echo get_bloginfo('name'); ?>",
        "creator": [{
            "@type": "Person",
            "name": "Emil Wibe",
            "jobTitle": "Website Designer & Developer"
        }]
    }
</script>

<?php wp_footer(); ?>
</body>

</html>