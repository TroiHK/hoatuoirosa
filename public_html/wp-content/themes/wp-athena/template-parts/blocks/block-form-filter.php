<div class="block-filter">
	<form action="<?php echo esc_url( home_url( '/' ) . 'tim-kiem-nang-cao/' ); ?>" class="d-flex align-items-center">
		<div class="form-group">
			<label><?= __('Chọn chủ đề', DOMAIN) ?></label>
			<select>
				<option selected>Tất cả</option>
				<option value="Dưới 250.000đ">Dưới 250.000đ</option>
				<option value="Giá từ 250.000đ - 350.000đ">Giá từ 250.000đ - 350.000đ</option>
				<option value="Giá từ 350.000đ - 400.000đ">Giá từ 350.000đ - 400.000đ</option>
				<option value="Giá từ 500.000đ - 600.000đ">Giá từ 500.000đ - 600.000đ</option>
				<option value="Giá từ 600.000đ - 800.000đ">Giá từ 600.000đ - 800.000đ</option>
				<option value="Giá từ 800.000đ - 1.000.000đ">Giá từ 800.000đ - 1.000.000đ</option>
				<option value="Giá trên 1.000.000đ">Giá trên 1.000.000đ</option>
			</select>
		</div>
		<div class="form-group">
			<label><?= __('Chọn mức giá', DOMAIN) ?></label>
			<select>
				<option selected>Tất cả</option>
				<option value="Dưới 250.000đ">Dưới 250.000đ</option>
				<option value="Giá từ 250.000đ - 350.000đ">Giá từ 250.000đ - 350.000đ</option>
				<option value="Giá từ 350.000đ - 400.000đ">Giá từ 350.000đ - 400.000đ</option>
				<option value="Giá từ 500.000đ - 600.000đ">Giá từ 500.000đ - 600.000đ</option>
				<option value="Giá từ 600.000đ - 800.000đ">Giá từ 600.000đ - 800.000đ</option>
				<option value="Giá từ 800.000đ - 1.000.000đ">Giá từ 800.000đ - 1.000.000đ</option>
				<option value="Giá trên 1.000.000đ">Giá trên 1.000.000đ</option>
			</select>
		</div>
		<div class="form-group ml-auto">
			<input type="submit" value="Tìm kiếm">
		</div>
	</form>
</div>