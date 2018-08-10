<section class="block-slider block-slider--inter">
	<div class="thumb" style="background-image: url('<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/bg-banner.jpg')">
		<div class="container d-flex h-100">
			<div class="row w-100">
				<div class="content col-md-6 d-flex flex-column">
					<div class="content-top">
						<h1 class="title"><?php the_title(); ?></h1>
						<?php if ( !is_singular('product') && has_excerpt() ) : ?>
							<p><?php the_excerpt(); ?></p>
						<?php endif; ?>
					</div>
					<div class="content-bottom mt-auto">
						<?php get_template_part( 'template-parts/blocks/block', 'social' ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-default w-50">
			<div class="item">
				<img src="<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/banner1.png" alt="default-image-banner">
			</div>
		</div>
	</div>
</section>
