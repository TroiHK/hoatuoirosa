<footer id="footer" class="footer">
	<div class="wrapper clearfix">
		<?php
			wp_nav_menu([
			    'theme_location'    => 'footer_menu',
			    'menu_class'        => 'footer-menu',
			    'container'         => 'div',
			    'container_class'   => 'wrap-footer-menu',
			    'container_id'      => 'wrap-footer-menu'
			]);
		?>

		<div class="footer-bottom">
			<div class="col">
				<?php get_template_part('template-parts/footer/footer','logo') ?>
				<?php get_template_part('template-parts/blocks/block','info') ?>
				<?php get_template_part('template-parts/blocks/block','social') ?>
				<?php get_template_part('template-parts/footer/footer','copyright') ?>
			</div>	

			<div class="col">
				<h4><?= __('THÔNG TIN THÊM', DOMAIN) ?></h4>
				<?php
					wp_nav_menu([
					    'theme_location'    => 'info_menu',
					    'menu_class'        => 'info-menu',
					    'container'         => 'div',
					    'container_class'   => 'wrap-info-menu',
					    'container_id'      => 'wrap-info-menu'
					]);
				?>
			</div>

			<div class="col">
				<h4><?= __('THỐNG KÊ TRUY CẬP', DOMAIN) ?></h4>
				<div class="connect-view">
					<ul>
						<li>Online : 35</li>
						<li>Trong ngày : 1072</li>
						<li>Trong tuần : 1293</li>
						<li>Trong tháng : 32028</li>
						<li>Tổng cộng : 3295137</li>
					</ul>
				</div>
			</div>

			<div class="col">
				<h4>FANPAGE</h4>
				<div class="code-fanpage">
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
