<?php	
	$args = array(
		'post_type' => 'product',
		'post_per_page' => 20,
		'post_status' => 'publish',
		'meta_key' => 'total_sales',
    	'orderby' => 'meta_value_num',
	);
	$query = new WP_Query( $args );
	$totals = $query->found_posts;
?>
<?php if ( $query->have_posts() ) : ?>
<section class="block block-bestseller" style="background: url('<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/bg-bestseller.jpg')">
	<div class="container">
		<header class="header text-center">
			<p class="block-title"><span><?= __('sản phẩm bán chạy', DOMAIN) ?><img src="<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/bg-leaf.png" class="leaf" alt=""></span></p>
			<img src="<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/line.png" class="line" alt="">
		</header>

		<div class="row<?= $totals > 4 ? ' slider-product' : '' ?>">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<?php get_template_part( 'template-parts/product/item', 'bestseller' ); ?>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif; ?>
<?php wp_reset_query() ?>