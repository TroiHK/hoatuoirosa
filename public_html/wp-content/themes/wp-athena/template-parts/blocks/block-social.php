<?php if ( have_rows('ROSA_SOCIAL_ITEM', 'option') ) : ?>
	<section class="block block-social">
		<ul class="list-inline">
			<?php while ( have_rows('ROSA_SOCIAL_ITEM', 'option') ) : the_row() ?>
				<?php
					$text = get_sub_field('text');
					$icon = get_sub_field('icon');
					$link = get_sub_field('link');
				?>
				<?php if ( $text != 'email' ) : ?>
					<li class="list-inline-item">
						<a href="<?= $link ?>" target="_blank">
							<img src="<?= $icon ?>" alt="<?= $text ?>">
						</a>
					</li>
				<?php else : ?>
					<li class="list-inline-item">
						<a href="mailto:<?= $link ?>">
							<img src="<?= $icon ?>" alt="<?= $text ?>">
						</a>
					</li>
				<?php endif; ?>
			<?php endwhile; ?>
		</ul>
	</section>
<?php endif; ?>