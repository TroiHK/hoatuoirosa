<?php
/**
 * Rename product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'Thông Tin' );		// Rename the description tab
	$tabs['reviews']['title'] = __( 'Đánh giá' );				// Rename the reviews tab

	return $tabs;

}