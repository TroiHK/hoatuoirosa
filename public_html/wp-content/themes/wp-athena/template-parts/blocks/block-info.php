<?php
	$info['tel'] = get_field(ROSA_TEL,'option');
	$info['tel_2'] = get_field(ROSA_TEL_2,'option');
	$info['tel_text'] = get_field(ROSA_TEL_TEXT,'option');
	$info['address'] = get_field(ROSA_ADDRESS,'option');
?>
<div class="block block-info">
	<p class="address">
		<?= $info['address'] ?>
	</p>
	<p class="phone-number">
		<label><?= $info['tel_text'] ?></label>
		<a class="tel" href="tel:+<?= str_replace([' ','.',','],['','',''],$info['tel']) ?>"><?= $info['tel'] ?></a>
		<?php if ( $info['tel_2'] ) : ?>
			- <a class="tel2" href="tel:+<?= str_replace([' ','.',','],['','',''],$info['tel_2']) ?>"><?= $info['tel_2'] ?></a>
		<?php endif; ?>
	</p>
</div>