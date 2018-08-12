<main id="main" class="main" style="background: url('<?= ASSETS_PATH ?>/images/bg-main-content.jpg')">
	<?php get_template_part( 'template-parts/blocks/block', 'breadcrumb' ); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<section class="page-content product-detail">
					<?php if ( have_posts() ) : ?>
						<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						<section class="block-bestseller block-list-product">
							<div class="row">
								<?php while ( have_posts() ) : the_post(); ?>
									<div class="col-12 col-sm-6 col-md-3">
										<?php 
											if ( get_post_type($post->ID) == 'product' ) :
												get_template_part( 'template-parts/product/item', 'bestseller' ); 
											else :
												get_template_part( 'template-parts/search/item' );
											endif;
										?>
									</div>
								<?php endwhile; ?>
							</div>
						</section>
					<?php else : ?>
						<h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
						<p><?php _e( 'Xin lỗi, không tìm thấy kết quả bạn bạn mong muốn', DOMAIN ); ?></p>
						<?php get_template_part( 'template-parts/blocks/block','form-filter' ) ?>
					<?php endif; ?>
				</section>
			</div>
		</div>
	</div>
</main>