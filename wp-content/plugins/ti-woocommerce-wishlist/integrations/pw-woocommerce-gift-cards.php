<?php
/**
 * TI WooCommerce Wishlist integration with:
 *
 * @name PW WooCommerce Gift Cards
 *
 * @version 1.173
 *
 * @slug pw-woocommerce-gift-cards
 *
 * @url https://wordpress.org/plugins/pw-woocommerce-gift-cards/
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

if ( ! function_exists( 'tinv_wishlist_item_meta_pw_woocommerce_gift_cards' ) ) {

	/**
	 * Set description for meta  PW WooCommerce Gift Cards
	 *
	 * @param array $item_data Meta array.
	 * @param int $product_id Wishlist Product.
	 * @param int $variation_id Woocommerce Product.
	 *
	 * @return array
	 */
	function tinv_wishlist_item_meta_pw_woocommerce_gift_cards( $item_data, $product_id, $variation_id ) {

		if ( defined( 'PWGC_VERSION' ) ) {
			global $pw_gift_cards;

			foreach ( $pw_gift_cards->gift_card_meta as $key => $display ) {
				if ( isset( $item_data[ $key ] ) ) {
					$item_data[ $key ]['key'] = $display;
				}
			}

		}

		return $item_data;
	}

	add_filter( 'tinvwl_wishlist_item_meta_post', 'tinv_wishlist_item_meta_pw_woocommerce_gift_cards', 10, 3 );
} // End if().

if ( ! function_exists( 'tinvwl_item_price_pw_woocommerce_gift_cards' ) ) {

	/**
	 * Modify price for  PW WooCommerce Gift Cards.
	 *
	 * @param string $price Returned price.
	 * @param array $wl_product Wishlist Product.
	 * @param WC_Product $product Woocommerce Product.
	 *
	 * @return string
	 */
	function tinvwl_item_price_pw_woocommerce_gift_cards( $price, $wl_product, $product ) {

		if ( defined( 'PWGC_VERSION' ) ) {
			if ( $product->get_type() == PWGC_PRODUCT_TYPE_SLUG ) {
				$id = ( $wl_product['variation_id'] ) ? $wl_product['variation_id'] : $wl_product['product_id'];
				$p = wc_get_product($id);

				if ($p) {
					return $p->get_price_html();
				}
			}
		}

		return $price;
	}

	add_filter( 'tinvwl_wishlist_item_price', 'tinvwl_item_price_pw_woocommerce_gift_cards', 10, 3 );
} // End if().


add_filter( 'tinvwl_addtowishlist_modify_type', 'tinvwl_addtowishlist_modify_type_pw_woocommerce_gift_cards', 10, 2 );

function tinvwl_addtowishlist_modify_type_pw_woocommerce_gift_cards( $type, $post ) {
	if ( defined( 'PWGC_VERSION' ) ) {
		if ( $type == PWGC_PRODUCT_TYPE_SLUG ) {
			return 'variable';
		}
	}

	return $type;
}
