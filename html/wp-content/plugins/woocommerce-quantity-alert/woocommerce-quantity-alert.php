<?php
/*
 * Plugin Name:       woocommerce-quantity-alert
 * Plugin URI:        https://example.com/plugins/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Elyse Lam
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 
woocommerce-quantity-alert is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {URI to Plugin License}.


cart-totals
*/



// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Plugin initialization and main logic
function alert() {
    
    echo "<script>jQuery(document).ready(function($) { $('body').on('change', '.qty', function() { var itemRow = $(this).closest('.cart_item'); var skuName = itemRow.find('.product-name').text().trim(); var quantity = $(this).val(); alert('You just changed the quantity of ' + skuName + ' to ' + quantity); }); }); </script>";
}
add_action('woocommerce_cart_totals_after_order_total', 'alert');


