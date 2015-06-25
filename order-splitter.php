<?php
/*
Plugin Name: Order Splitter for WooCommerce
Description: Split an existing order of WooCommerce products easily into multiple orders.
Version:     1.0
Author:      Tarun Dhanwani
License:     GPL2+
*/

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Access denied.' );
}

define( 'OSW_NAME', 'Order Splitter for WooCommerce' );

/*
 * Load main classes
 */
require_once( __DIR__ . '/classes/osw-module.php' );
require_once( __DIR__ . '/classes/order-splitter-woocommerce.php' );
require_once( __DIR__ . '/includes/admin-notice-helper/admin-notice-helper.php' );
require_once( __DIR__ . '/classes/osw-settings.php' );
require_once( __DIR__ . '/classes/osw-instance-class.php' );

if ( class_exists( 'Order_Splitter_WooCommerce' ) ) {
	$GLOBALS['osw'] = WordPress_Plugin_Skeleton::get_instance();
	register_activation_hook(   __FILE__, array( $GLOBALS['osw'], 'activate' ) );
	register_deactivation_hook( __FILE__, array( $GLOBALS['osw'], 'deactivate' ) );
}
