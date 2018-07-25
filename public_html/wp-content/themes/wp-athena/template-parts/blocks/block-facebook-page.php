<?php 
	global $facebookCode;
	if ( have_rows(ROSA_FACEBOOK_PAGE, 'option') ) :
		while ( have_rows(ROSA_FACEBOOK_PAGE, 'option') ) : the_row(); $facebookCode = get_sub_field('code');
?>
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=<?= get_sub_field('appid') ?>&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<?php 
		endwhile;
	endif; 
?>