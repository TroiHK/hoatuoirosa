<?php if ( have_rows(ROSA_FILTER_ITEM, 'option') ) : ?>
	<div class="block-aside-price">
		<p class="block-aside-title"><?= __('Chọn mức giá', DOMAIN) ?></p>
		<div class="price-bar"></div>
		<ul>
			<?php 
				while ( have_rows(ROSA_FILTER_ITEM, 'option') ) : 
					the_row(); 
					$value = get_sub_field('value');
			?>
				<li>
					<a style="color: inherit;" href="<?= esc_url( home_url( '/' ) . 'tim-kiem-nang-cao/?muc-gia=' ); ?><?= $value ?>">
						<?= get_sub_field('text') ?>
					</a>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
<?php endif; ?>