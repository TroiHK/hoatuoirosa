<h4><?= __('THÔNG TIN THÊM', DOMAIN) ?></h4>
<?php
	wp_nav_menu([
		'theme_location'    => 'info_menu',
		'menu_class'        => 'info-menu',
		'container'         => 'div',
		'container_class'   => 'wrap-info-menu',
		'container_id'      => 'wrap-info-menu'
	]);
?>