<section class="block-slider">
	<div class="thumb" style="background-image: url('<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/bg-banner.jpg')">
		<div class="container d-none d-md-flex h-100">
			<div class="row">
				<div class="content col-md-6 d-flex flex-column">
					<?php if ( have_rows(ROSA_HP_TOP_CONTENT) ) : ?>
					<div class="content-top">
						<?php while ( have_rows(ROSA_HP_TOP_CONTENT) ) : the_row(); ?>
							<h1 class="title"><?= get_sub_field('title') ?></h1>
							<p><?= get_sub_field('content') ?></p>
							<a href="<?= get_sub_field('button_link') ?>" class="btn-more" title=""><?= get_sub_field('button_text') ?></a>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>

					<div class="content-bottom mt-auto">
						<?php get_template_part('template-parts/blocks/block','info') ?>
						<?php get_template_part('template-parts/blocks/block','social') ?>
					</div>
				</div>
			</div>
		</div>

		<?php if ( have_rows(ROSA_HP_SLIDER_ITEMS) ) : ?>
		<div class="slider-default">
			<?php while ( have_rows(ROSA_HP_SLIDER_ITEMS) ) : the_row(); ?>
				<div class="item">
					<img src="<?= get_sub_field('image') ?>" alt="<?= get_bloginfo('name') ?> slider-<?= get_row_index() ?>">
				</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>