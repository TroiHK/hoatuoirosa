<?php 
	$postThumbnail = get_the_post_thumbnail_url($post->ID, PRODUCT_THUMB_MEDIUM);
?>
<div class="item">
	<a href="<?= get_the_permalink() ?>" style="color: inherit;">
		<div class="thumb">
			<img src="<?= $postThumbnail ? $postThumbnail : ASSETS_PATH . 'images/img6.jpg' ?>" class="w-100" alt="<?= get_the_title() ?>">
		</div>
		<div class="content">
			<p><?= get_the_title() ?></p>
		</div>
		<img src="<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/bg-flower-pink.png" class="bg" alt="<?= get_bloginfo('name') ?> bg-flower-pink">
	</a>
</div>