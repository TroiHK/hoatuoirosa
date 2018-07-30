<?php
	$header['tel'] = get_field(ROSA_TEL,'option');
	$header['tel_text'] = get_field(ROSA_TEL_TEXT,'option');
?>
<div class="hotline">
	<img src="<?= ASSETS_PATH ?>images/bg-flower-pink.png" class="left" alt="">
	<label><?= $header['tel_text'] ?></label>
	<a href="tel:+<?= str_replace([' ','.',','],['','',''],$header['tel']) ?>"><?= $header['tel'] ?></a>
	<img src="<?= ASSETS_PATH ?>/images/bg-flower-pink.png" class="right" alt="">
</div>
