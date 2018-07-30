<?php	
	$args = array(
		'post_type' => 'product',
		'post_per_page' => 20,
		'post_status' => 'publish',
		'meta_query'     => array(
	        'relation' => 'OR',
	        'sale_price' => array( // Simple products type
	            'key'           => '_sale_price',
	            'value'         => 0,
	            'compare'       => '>',
	            'type'          => 'numeric'
	        ),
	        // 'variation_sale_price' => array( // Variable products type
	        //     'key'           => '_min_variation_sale_price',
	        //     'value'         => 0,
	        //     'compare'       => '>',
	        //     'type'          => 'numeric'
	        // )
	    ),
	    'orderby' => array(
	        'sale_price' => 'DESC',
	        // 'variation_sale_price' => 'DESC',
	    ),
	);
	$query = new WP_Query( $args );
	$totals = $query->found_posts;
?>
<?php if ( $query->have_posts() ) : ?>
<section class="block-newproduct block-promotion" style="background: url('<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/bg-promotion.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<p class="block-title"><?= __('khuyến mãi khủng', DOMAIN) ?></p>
			</div>
			<div class="col-md-9">
				<div class="row<?= $totals > 3 ? ' slider-product' : '' ?>">
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="col-12 col-sm-6 col-md-4">
							<?php get_template_part( 'template-parts/product/item', 'sale' ); ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<?php wp_reset_query() ?>