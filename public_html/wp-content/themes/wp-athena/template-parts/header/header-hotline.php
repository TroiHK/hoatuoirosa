<?php
	$header['tel'] = get_field(ROSA_TEL,'option');
	$header['tel_text'] = get_field(ROSA_TEL_TEXT,'option');
?>
<div class="hotline">
	<label><?= $header['tel_text'] ?></label>
	<a href="tel:+<?= str_replace([' ','.',','],['','',''],$header['tel']) ?>"><?= $header['tel'] ?></a>
</div>