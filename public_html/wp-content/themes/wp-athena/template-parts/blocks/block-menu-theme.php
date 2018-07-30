<?php 
	$product_cats = get_terms( array(
	    'taxonomy' => 'product_cat',
	    'exclude' => array(28),
	    'hide_empty' => false,
	) );
?>
<div class="block-aside-menu">
	<p class="block-aside-title"><?= __('CHỦ ĐỀ', DOMAIN) ?></p>
	<ul>
		<?php foreach ($product_cats as $value) { ?>
			<li><a href="<?= get_term_link($value->term_id, 'product_cat') ?>" title=""><?= $value->name ?></a></li>
		<?php } ?>
	</ul>
	<img src="<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/bg-flower-pink.png" class="left" alt="">
	<img src="<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/bg-aside-menu.png" class="right" alt="">
</div>