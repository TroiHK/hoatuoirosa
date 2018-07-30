<?php
/**
 * Template Name: Cart
 */
get_header();
?>
<!--Start Pull HTML here-->
<?php get_template_part( 'template-parts/blocks/block', 'banner' ); ?>
<?php get_template_part( 'template-parts/cart/content' ); ?>
<?php get_template_part( 'template-parts/blocks/block', 'promotion'); ?>
<?php get_template_part( 'template-parts/blocks/block', 'contact'); ?>
<!--END  Pull HTML here-->
<?php get_footer(); ?>