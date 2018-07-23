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
					<li class="nav-item current-menu-item menu-item-has-children">
						<a class="nav-link" href="#">TRANG CHỦ</a>
						<span class="dropdown-toggle d-lg-none" id="sub1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></span>
						<div class="dropdown-menu" aria-labelledby="sub1">
							<div class="container">
								<div class="row">
									<div class="col-lg-3">
										<ul class="sub-menu">
											<li class="menu-item"><a href="#">Rechercher un bien immobilier</a></li>
											<li class="menu-item"><a href="#">Programmes immobiliers TVA réduite</a></li>
											<li class="menu-item"><a href="#">Programmes immobiliers neuf</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item menu-item-has-children">
						<a class="nav-link" href="#">MẪU HOA MỚI</a>
					</li>
					<li class="nav-item menu-item-has-children">
						<a class="nav-link" href="#">CHỦ ĐỀ</a>
					</li>
					<li class="nav-item menu-item-has-children">
						<a class="nav-link" href="#">LIÊN HỆ</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>