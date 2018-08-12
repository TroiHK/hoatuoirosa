<section class="block-slider block-slider--inter">
	<div class="thumb" style="background-image: url('<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/bg-banner.jpg')">
		<div class="container d-none d-md-flex h-100">
			<div class="row w-100">
				<div class="content col-md-6 d-flex flex-column">
					<div class="content-top">
						<?= the_archive_title( '<h1 class="title">', '</h1>' ) ?>
						<?= the_archive_description( '<p>', '</p>' ) ?>
					</div>
					<div class="content-bottom mt-auto">
						<?php get_template_part('template-parts/blocks/block','social') ?>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-default w-50">
			<div class="item">
				<img src="<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/banner1.png" alt="">
			</div>
		</div>
	</div>
</section>
