<?php 
	$product = wc_get_product( $post->ID );
	$price = $product->get_price();
	$sku = $product->get_sku();
?>
<div class="item">
	<a href="<?= get_the_permalink() ?>" style="color: inherit;">
		<div class="thumb">
			<img src="<?= get_the_post_thumbnail_url($post->ID, PRODUCT_THUMB_MEDIUM) ?>" class="w-100" alt="<?= get_the_title() ?>">
		</div>
		<div class="content">
			<p><?= get_the_title() ?></p>
			<p><?= __('Mã:', DOMAIN) . ' ' . $sku ?></p>
			<p><?= __('Giá:', DOMAIN) . ' ' . number_format($price, 0, '', '.') ?>đ</p>
		</div>
		<p class="price"><?= __('Mua ngay', DOMAIN) ?></p>
		<img src="<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/bg-flower-pink.png" class="bg" alt="<?= get_bloginfo('name') ?> bg-flower-pink">
	</a>
</div>