<?php if ( have_rows('ROSA_SOCIAL_ITEM', 'option') ) : ?>
	<section class="block block-social">
		<ul class="list-inline">
<!--			--><?php //while ( have_rows('ROSA_SOCIAL_ITEM', 'option') ) : the_row() ?>
<!--				--><?php
//					$text = get_sub_field('text');
//					$icon = get_sub_field('icon');
//					$link = get_sub_field('link');
//				?>
<!--				--><?php //if ( $text != 'email' ) : ?>
<!--					<li class="list-inline-item">-->
<!--						<a href="--><?//= $link ?><!--" target="_blank">-->
<!--							<img src="--><?//= $icon ?><!--" alt="--><?//= $text ?><!--">-->
<!--						</a>-->
<!--					</li>-->
<!--				--><?php //else : ?>
<!--					<li class="list-inline-item">-->
<!--						<a href="mailto:--><?//= $link ?><!--">-->
<!--							<img src="--><?//= $icon ?><!--" alt="--><?//= $text ?><!--">-->
<!--						</a>-->
<!--					</li>-->
<!--				--><?php //endif; ?>
<!--			--><?php //endwhile; ?>
			<li class="list-inline-item">
				<a href="#" target="_blank"><i class="rosa-facebook"></i></a>
			</li>
			<li class="list-inline-item">
				<a href="#" target="_blank"><i class="rosa-google-plus"></i></a>
			</li>
			<li class="list-inline-item">
				<a href="#" target="_blank"><i class="rosa-youtube-play"></i></a>
			</li>
			<li class="list-inline-item">
				<a href="#" target="_blank"><i class="rosa-email"></i></a>
			</li>
		</ul>
	</section>
<?php endif; ?>
