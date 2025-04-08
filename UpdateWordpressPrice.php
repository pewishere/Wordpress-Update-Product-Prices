<?php
/**
 * Plugin Name: Wordpress Update Product Prices
 * Description: CHANGE PRICE OF ALL PRODUCTS WITH ONE CLIKE
 * Version: 1.0
 * Author: poori
 * Author URI: https://github.com/pewishere
 * CODER BY DAY GAMER BY NIGHT
 */

if (!defined('ABSPATH')) {
    exit;
}

function upp_update_product_prices() {
    global $wpdb;

// IN META_VALUE ENTER PRICE YOU WANNA CHANGE
    $products = $wpdb->get_results("
        SELECT post_id FROM $wpdb->postmeta
        WHERE meta_key = '_regular_price'
        AND meta_value = ''
        ");

    if ($products) {
        foreach ($products as $product) {
            $product_id = $product->post_id;
            // IN _regular_price AND _price ENTER NEW PRICE
            update_post_meta($product_id, '_regular_price', '');
            update_post_meta($product_id, '_price', '');
        }
        }
       
}
// SAVE AND UPLDOAD FILE ON YOUR WORDPRESS WEB-SITE, HAVE FUN!
register_activation_hook(__FILE__, 'upp_update_product_prices');
