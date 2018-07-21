<?php if ( have_rows('ROSA_SOCIAL_ITEM', 'option') ) : ?>
	<div class="block block-social">
		<?php while ( have_rows('ROSA_SOCIAL_ITEM', 'option') ) : the_row() ?>
			<?php 
				$text = get_sub_field('text');
				$icon = get_sub_field('icon');
				$link = get_sub_field('link');
			?>
			<?php if ( $text != 'email' ) : ?>
				<a href="<?= $link ?>" target="_blank">
					<img src="<?= $icon ?>" alt="<?= $text ?>">
				</a>
			<?php else : ?>
				<a href="mailto:<?= $link ?>">
					<img src="<?= $icon ?>" alt="<?= $text ?>">
				</a>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
<?php endif; ?>