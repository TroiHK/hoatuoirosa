<?php
/**
 * Template Name: Trang Chủ
 */
get_header();
?>
<!--Start Pull HTML here-->
<?php get_template_part( 'template-parts/home/slider' ); ?>
<?php get_template_part( 'template-parts/home/content' ); ?>
<?php get_template_part('template-parts/blocks/block','newproduct') ?>
<?php get_template_part('template-parts/blocks/block','bestseller') ?>
<?php get_template_part('template-parts/blocks/block','promotion') ?>
<?php get_template_part('template-parts/blocks/block','contact') ?>
<!--END  Pull HTML here-->
<?php get_footer(); ?>