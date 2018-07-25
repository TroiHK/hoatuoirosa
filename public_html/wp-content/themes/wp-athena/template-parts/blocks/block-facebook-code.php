<?php 
	global $facebookCode;
	if ( $facebookCode ) :
?>
<h4><?= __('FANPAGE', DOMAIN) ?></h4>
<div class="code-fanpage">
	<?= $facebookCode ?>
</div>
<?php endif; ?>