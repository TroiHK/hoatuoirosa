<?php 
	$arrayReplate = wc_get_related_products( get_the_id(), -1, array() );
	$totals = count($arrayReplate);
	$hasSlider = $totals > 8;
?>
<?php if ( $arrayReplate ) : ?>
<section class="block block-newproduct block-list-product">
	<div class="container">
		<header class="header text-center">
			<p class="block-title"><span><?= __('sản phẩm tương tự', DOMAIN) ?><img src="<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/bg-leaf.png" class="leaf" alt=""></span></p>
			<img src="<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/line.png" class="line" alt="">
		</header>

		<div class="row<?= $hasSlider ? ' slider-product' : '' ?>">
			<?php if ( $hasSlider ) : $index = 1; ?>
				<?php foreach ($arrayReplate as $value) : $post = get_post($value); setup_postdata($post); ?>
					<?= ( $index - 1 ) % 2 == 0 ? '<div class="col-12 col-sm-6 col-md-3">' : '' ?>
						<?php get_template_part( 'template-parts/product/item' ); ?>
					<?= ( $index % 2 == 0 ) || ( $index % 2 != 0 && $index == $totals ) ? '</div>' : '' ?>
					<?php $index++; ?>
				<?php endforeach; ?>
			<?php else : ?>
				<?php foreach ($arrayReplate as $value) : $post = get_post($value); setup_postdata($post); ?>
					<div class="col-12 col-sm-6 col-md-3">
						<?php get_template_part( 'template-parts/product/item' ); ?>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<?php endif; ?>