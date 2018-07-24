<?php
//wp_nav_menu([
//    'theme_location'    => 'primary_menu',
//    'menu_class'        => 'main-menu',
//    'container'         => 'nav',
//    'container_class'   => 'wrap-main-menu',
//    'container_id'      => 'wrap-main-menu'
//]);
//?>

<nav class="navbar navbar-expand-lg">
		<div class="container">
			<?php
			$header['logo'] = get_field(ROSA_LOGO,'option');
			?>
			<a class="navbar-brand" href="/"><img src="<?= $header['logo'] ?>" alt="Logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>
			<div class="collapse navbar-collapse" id="navbars">
				<ul class="navbar-nav">
					<li class="nav-item current-menu-item">
						<a class="nav-link" href="#">TRANG CHỦ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">MẪU HOA MỚI</a>
					</li>
					<li class="nav-item menu-item-has-children">
						<a class="nav-link" href="#">CHỦ ĐỀ</a>
						<span class="dropdown-toggle d-lg-none" id="sub1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></span>
						<div class="dropdown-menu rounded-0" aria-labelledby="sub1">
							<ul class="sub-menu">
								<li class="menu-item"><a href="#">Hoa cưới</a></li>
								<li class="menu-item"><a href="#">Hoa sinh nhật</a></li>
								<li class="menu-item"><a href="#">Hoa khai trương</a></li>
								<li class="menu-item"><a href="#">Hoa tang lễ</a></li>
								<li class="menu-item"><a href="#">Hoa giỏ</a></li>
								<li class="menu-item"><a href="#">Hoa tặng mẹ</a></li>
								<li class="menu-item"><a href="#">Hoa ngày lễ</a></li>
								<li class="menu-item"><a href="#">Hoa giáng sinh</a></li>
								<li class="menu-item"><a href="#">Hoa mừng tốt nghiệp</a></li>
								<li class="menu-item"><a href="#">Hoa chúc sức khỏe</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">LIÊN HỆ</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
