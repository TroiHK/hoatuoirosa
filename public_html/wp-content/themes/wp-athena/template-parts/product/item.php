<?php 
	$product = wc_get_product( $post->ID );
	$price = $product->get_price();
?>
<div class="item">
	<a href="<?= get_the_permalink() ?>">
		<img src="<?= get_the_post_thumbnail_url($post->ID, PRODUCT_THUMB) ?>" class="w-100" alt="<?= get_the_title() ?>">
		<p class="price"><?= number_format($price, 0, '', '.') ?></p>
		<img src="<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/bg-flower.png" class="bg" alt="<?= get_bloginfo('name') ?> g-flower">
	</a>
</div>