<?php	
	$args = array(
		'post_type' => 'product',
		'orderby' => 'id',
		'order' => 'DESC',
		'post_status' => 'publish',
		'post_per_page' => 20,
	);
	$query = new WP_Query( $args );
	$totals = $query->found_posts;
?>
<?php if ( $query->have_posts() ) : ?>
<section class="block-newproduct">
	<div class="container">
		<div class="row<?= $totals > 4 ? ' slider-product' : '' ?>">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-12 col-sm-6 col-md-3">
					<?php get_template_part( 'template-parts/product/item' ); ?>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif; ?>
<?php wp_reset_query() ?>