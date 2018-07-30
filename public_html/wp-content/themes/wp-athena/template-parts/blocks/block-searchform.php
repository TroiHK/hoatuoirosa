<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<section class="block block-searchform">
    <div class="container text-right">
        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?= esc_attr_x( 'Tìm sản phẩm', 'placeholder', DOMAIN ); ?>" value="<?php echo get_search_query(); ?>" name="s" />

			<button type="submit" class="search-submit">
				<span class="screen-reader-text rosa-search"></span>
			</button>
		</form>
    </div>
</section>
