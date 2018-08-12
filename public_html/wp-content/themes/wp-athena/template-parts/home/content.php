<section class="block block-content" style="background: url('<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/bg-content.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<?php get_template_part('template-parts/blocks/block','form-filter') ?>
			</div>
		</div>
		
		<?php while ( have_rows(ROSA_HP_CONTENT) ) : the_row(); ?>
			<header class="header text-center">
				<p class="block-title"><span><?= get_sub_field('title') ?><img src="<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/bg-leaf.png" class="leaf" alt="<?= get_bloginfo('name') ?> leaf"></span></p>
				<img src="<?= site_url() ?>/wp-content/themes/wp-athena/assets/images/line.png" class="line" alt="<?= get_bloginfo('name') ?> line">
			</header>
			<div class="content text-center">
				<?= get_sub_field('wysiwyg') ?>
			</div>
		<?php endwhile; ?>
	</div>
</section>
