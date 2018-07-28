<main id="main" class="main" style="background: url('<?= ASSETS_PATH ?>/images/bg-main-content.jpg')">
	<?php get_template_part( 'template-parts/blocks/block', 'breadcrumb' ); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<section class="page-content product-detail">
					<?php get_template_part('template-parts/blocks/block','form-filter') ?>
				</section>
			</div>
		</div>
	</div>
</main>
