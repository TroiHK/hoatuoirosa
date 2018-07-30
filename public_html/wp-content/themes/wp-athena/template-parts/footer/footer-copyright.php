<?php 
	$footer['copyright'] = str_replace( '%year%', date('Y'), get_field(ROSA_COPYRIGHT, 'option') );
?>
<div class="copyright">
	<p>
		<a href="<?= site_url() ?>/html-sitemap"><?= __('Html Sitemap', DOMAIN) ?></a> 
		/ 
		<a href="<?= site_url() ?>/sitemap_index.xml"><?= __('Xml Sitemap', DOMAIN) ?></a>
	</p>
	<p><?= $footer['copyright'] ?></p>
</div>