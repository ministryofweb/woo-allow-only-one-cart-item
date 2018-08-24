<?php
/*
Plugin Name: WooCommerce - allow only one item in cart
Description: Removes all items from cart before another item is added.
Version: 0.1.0
Author: Marcus Jaschen
Author URI: https://www.marcusjaschen.de/
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
*/

add_filter(
	'woocommerce_add_cart_item_data',
	'ministryofweb_ensure_only_one_item_in_cart',
	10,
	1
);

function ministryofweb_ensure_only_one_item_in_cart( $cartItemData ) {
	wc_empty_cart();

	return $cartItemData;
}
