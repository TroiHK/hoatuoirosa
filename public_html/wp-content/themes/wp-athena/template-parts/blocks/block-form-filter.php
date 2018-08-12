<?php 
	$chuDe = isset($_GET['chu-de']) ? $_GET['chu-de'] : '';
	$mucGia = isset($_GET['muc-gia']) ? $_GET['muc-gia'] : '';

	$product_cats = get_terms( array(
	    'taxonomy' => 'product_cat',
	    'exclude' => array(28),
	    'hide_empty' => false,
	) );
?>
<div class="block-filter">
	<form action="<?= esc_url( home_url( '/' ) . 'tim-kiem-nang-cao/' ); ?>" class="d-md-flex align-items-center">
		<div class="form-group d-flex align-items-center">
			<label><?= __('Chọn chủ đề', DOMAIN) ?></label>
			<select name="chu-de" class="ml-auto">
				<option value="all"<?= $chuDe == 'all' || !$chuDe ? ' selected' : '';?>><?= __('Tất cả', DOMAIN) ?></option>

				<?php foreach ($product_cats as $value) { ?>
					<option value="<?= $value->term_id ?>"<?= $chuDe == $value->term_id ? ' selected' : '' ?>><?= $value->name ?></option>
				<?php } ?>
			</select>
		</div>

		<?php if ( have_rows(ROSA_FILTER_ITEM, 'option') ) : ?>
		<div class="form-group d-flex align-items-center">
			<label><?= __('Chọn mức giá', DOMAIN) ?></label>
			<select name="muc-gia" class="ml-auto">
				<option value="all"<?= $mucGia == 'all' || !$mucGia ? ' selected' : '' ?>><?= __('Tất cả', DOMAIN) ?></option>

				<?php 
					while ( have_rows(ROSA_FILTER_ITEM, 'option') ) : 
						the_row(); 
						$value = get_sub_field('value');
				?>
					<option value="<?= $value ?>"<?= $mucGia == $value ? ' selected' : '' ?>><?= get_sub_field('text') ?></option>
				<?php endwhile; ?>
			</select>
		</div>
		<?php endif; ?>
		<div class="form-group ml-auto">
			<input type="submit" value="<?= __('Tìm kiếm', DOMAIN) ?>">
		</div>
	</form>
</div>