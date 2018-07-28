<footer id="footer" class="footer">
	<div class="container">
		<div class="footer-bottom">
			<?php get_template_part('template-parts/footer/footer','menu') ?>

			<div class="row">
				<div class="col-md-4">
					<?php get_template_part('template-parts/footer/footer','logo') ?>
					<?php get_template_part('template-parts/blocks/block','info') ?>
					<?php get_template_part('template-parts/blocks/block','social') ?>
					<?php get_template_part('template-parts/footer/footer','copyright') ?>
				</div>

				<div class="col-md-3 ft-menu">
					<?php get_template_part('template-parts/footer/footer','info') ?>
				</div>

				<div class="col-md-2 ft-menu">
					<?php get_template_part('template-parts/footer/footer','access') ?>
				</div>

				<div class="col-md-3 ft-menu">
					<?php get_template_part('template-parts/blocks/block','facebook-code') ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
