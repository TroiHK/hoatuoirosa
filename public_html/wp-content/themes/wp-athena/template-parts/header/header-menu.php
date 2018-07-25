<?php
	$header['logo'] = get_field(ROSA_LOGO,'option');
?>

<nav class="navbar navbar-expand-lg">
	<div class="container">
		<a class="navbar-brand" href="/"><img src="<?= $header['logo'] ?>" alt="Logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">
				<span></span>
				<span></span>
				<span></span>
			</span>
		</button>
		<?php
		    wp_nav_menu([
		        'theme_location'    => 'primary_menu',
		        'menu_class'        => 'navbar-nav',
		        'container'         => 'div',
		        'container_class'   => 'collapse navbar-collapse',
		        'container_id'      => 'navbars',
		        'walker'            => new MainMenuWalker()
		    ]);
		?>
	</div>
</nav>
