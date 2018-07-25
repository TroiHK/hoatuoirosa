<?php
/**
 * Template Name: Chủ Đề
 */
get_header();
?>
<!--Start Pull HTML here-->
<?php get_template_part( 'template-parts/inter/slider' ); ?>
<?php get_template_part( 'template-parts/inter/content' ); ?>
<?php get_template_part('template-parts/blocks/block','breadcrumd') ?>
<?php get_template_part('template-parts/blocks/block','promotion') ?>
<?php get_template_part('template-parts/blocks/block','contact') ?>
<!--END  Pull HTML here-->
<?php get_footer(); ?>