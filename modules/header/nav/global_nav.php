<?php
if (!defined('ABSPATH')) {
	exit;
}

echo '<button id="nav-toggle" class="nav-toggle">';
get_template_part('assets/ui/svg-part/hamburger-icon');
echo '</button>';

wp_nav_menu(array(
	'container_id' => 'global-nav',
	'container_class' => 'global-nav',
	'theme_location' => 'nav_primary',
	'container' => 'nav',
	'items_wrap' => '<ul>%3$s</ul>'
));
