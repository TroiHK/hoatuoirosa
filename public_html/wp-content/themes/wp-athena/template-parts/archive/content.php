<?php	
	$current_term_id = get_queried_object()->term_id;
	$args = array(
		'post_type' => 'post',
		'orderby' => 'id',
		'order' => 'DESC',
		'post_status' => 'publish',
		'post_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'category',
				'field'    => 'term_id',
				'terms'    => array( $current_term_id ),
			),
		),
	);
	$query = new WP_Query( $args );
	$totals = $query->found_posts;
	$hasSlider = $totals > 12;
?>
<main id="main" class="main" style="background: url('<?= ASSETS_PATH ?>/images/bg-main-content.jpg')">
	<?php get_template_part( 'template-parts/blocks/block', 'breadcrumb' ); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<aside class="aside">
					<?php get_template_part( 'template-parts/blocks/block', 'menu-archive' ); ?>
					<?php // get_template_part( 'template-parts/blocks/block', 'menu-filter' ); ?>
				</aside>
			</div>

			<div class="col-md-9">
				<?php if ( $query->have_posts() ) : ?>
					<section class="block-bestseller block-list-product">
						<div class="row<?= $hasSlider ? ' slider-product' : '' ?>">
							<?php if ( $hasSlider ) : $index = 1; ?>
								<?php while ( $query->have_posts() ) : $query->the_post(); ?>
									<?= ( $index - 1 ) % 4 == 0 ? '<div class="col-12 col-sm-6 col-md-4">' : '' ?>
										<?php get_template_part( 'template-parts/archive/item' ); ?>
									<?= ( $index % 4 == 0 ) || ( $index % 4 != 0 && $index == $totals ) ? '</div>' : '' ?>
									<?php $index++; ?>
								<?php endwhile; ?>
							<?php else : ?>
								<?php while ( $query->have_posts() ) : $query->the_post(); ?>
									<div class="col-12 col-sm-6 col-md-4">
										<?php get_template_part( 'template-parts/archive/item' ); ?>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</section>
				<?php else : ?>
					<section class="page-content p-3 product-detail">
						<h3><?= __('Xin lỗi không có bài viết cho chủ đề này!', DOMAIN) ?></h3>
					</section>
				<?php endif; ?>
			</div>
		</div>
	</div>
</main>
<?php wp_reset_query() ?>