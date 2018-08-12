<?php	
	$chuDe = isset($_GET['chu-de']) ? $_GET['chu-de'] : '';
	$mucGia = isset($_GET['muc-gia']) ? $_GET['muc-gia'] : '';

	$args = array(
		'post_type' => 'product',
		'post_per_page' => -1,
		'post_status' => 'publish',
		'orderby' => 'id',
		'order' => 'DESC',
	);

	if ( $chuDe ) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'product_cat',
				'field'    => 'term_id',
				'terms'    => array( $chuDe ),
			),
		);
	}

	if ( $mucGia && $mucGia != 'all' ) {
		if ( strpos($mucGia, '<') !== false ) :
			$prices = str_replace('<', '', $mucGia);
			$args['meta_query'] = array(
		        'relation' => 'OR',
		        array(
		        	'relation' => 'AND',
		        	array(
			            'key'           => '_sale_price',
			            'value'         => $prices,
			            'compare'       => '<',
			            'type'          => 'numeric'
			        ),
			        array(
			            'key'           => '_sale_price',
			            'value'         => 0,
			            'compare'       => '>',
			            'type'          => 'numeric'
			        )
		        ),
		        array(
		            'key'           => '_regular_price',
		            'value'         => $prices,
		            'compare'       => '<',
		            'type'          => 'numeric'
		        )
		    );
		elseif ( strpos($mucGia, '>') !== false ) :
			$prices = str_replace('>', '', $mucGia);
			$args['meta_query'] = array(
		        'relation' => 'OR',
		        array(
		            'key'           => '_sale_price',
		            'value'         => $prices,
		            'compare'       => '>',
		            'type'          => 'numeric'
		        ),
		        array(
		            'key'           => '_regular_price',
		            'value'         => $prices,
		            'compare'       => '>',
		            'type'          => 'numeric'
		        )
		    );
		elseif ( strpos($mucGia, '<') == false && strpos($mucGia, '>') == false ) :
			$prices = explode("-", $mucGia);
			$args['meta_query'] = array(
		        'relation' => 'AND',
		        array( 
		            'relation' => 'OR',
			        array(
			            'key'           => '_sale_price',
			            'value'         => $prices[0],
			            'compare'       => '>',
			            'type'          => 'numeric'
			        ),
			        array(
			            'key'           => '_regular_price',
			            'value'         => $prices[0],
			            'compare'       => '>',
			            'type'          => 'numeric'
			        )
		        ),
		        array (
		        	'relation' => 'OR',
			        array(
			        	'relation' => 'AND',
			        	array(
				            'key'           => '_sale_price',
				            'value'         => $prices[1],
				            'compare'       => '<',
				            'type'          => 'numeric'
				        ),
				        array(
				            'key'           => '_sale_price',
				            'value'         => 0,
				            'compare'       => '>',
				            'type'          => 'numeric'
				        )
			        ),
			        array( 
			            'key'           => '_regular_price',
			            'value'         => $prices[1],
			            'compare'       => '<',
			            'type'          => 'numeric'
			        )
		        )
		    );
		endif;
	}

	$query = new WP_Query( $args );
	$totals = $query->found_posts;
	$hasSlider = $totals > 12;
?>
<?php if ( $query->have_posts() ) : ?>
	<section class="block-bestseller block-list-product">
		<div class="row<?= $hasSlider ? ' slider-product' : '' ?>">
			<?php if ( $hasSlider ) : $index = 1; ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?= ( $index - 1 ) % 4 == 0 ? '<div class="col-12 col-sm-6 col-md-4 col-lg-3">' : '' ?>
						<?php get_template_part( 'template-parts/product/item', 'bestseller' ); ?>
					<?= ( $index % 4 == 0 ) || ( $index % 4 != 0 && $index == $totals ) ? '</div>' : '' ?>
					<?php $index++; ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3">
						<?php get_template_part( 'template-parts/product/item', 'bestseller' ); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>
<?php else : ?>
	<section class="page-content p-3 product-detail">
		<h3><?= __('Xin lỗi không có sản phẩm phù hợp!', DOMAIN) ?></h3>
	</section>
<?php endif; ?>
<?php wp_reset_query() ?>