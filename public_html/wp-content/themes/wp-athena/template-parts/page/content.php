<main id="main" class="main" style="background: url('<?= ASSETS_PATH ?>/images/bg-main-content.jpg')">
	<?php get_template_part( 'template-parts/blocks/block', 'breadcrumb' ); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<aside class="aside">
					<?php get_template_part( 'template-parts/blocks/block', 'menu-theme' ); ?>

					<?php get_template_part( 'template-parts/blocks/block', 'menu-filter'); ?>
				</aside>
			</div>
			<div class="col-md-9">
				<section class="page-content p-3 product-detail">
					<?php the_content(); ?>
				</section>
			</div>
		</div>
	</div>
</main>
