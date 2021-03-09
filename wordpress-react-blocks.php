<?php
/**
 * Plugin's bootstrap file to launch the plugin.
 *
 * @package     wordpress_react_blocks
 * @author      Jaggu (@jaggu07)
 * @license     GPL2+
 *
 * @wordpress-plugin
 * Plugin Name: Wordpress React block
 * Description: A plugin containing react blocks for Post, Pages etc.,.
 * Version:     1.0.0
 * Author:      Jaggu
 * Author URI:  https://github.com/jaggu07
 * License:     GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

namespace wordpress_react_blocks;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Gets this plugin's absolute directory path.
 *
 * @since  2.1.0
 * @ignore
 * @access private
 *
 * @return string
 */
function _get_plugin_directory() {
	return __DIR__;
}

/**
 * Gets this plugin's URL.
 *
 * @since  2.1.0
 * @ignore
 * @access private
 *
 * @return string
 */
function _get_plugin_url() {
	static $plugin_url;

	if ( empty( $plugin_url ) ) {
		$plugin_url = plugins_url( null, __FILE__ );
	}

	return $plugin_url;
}

// Enqueue JS and CSS.
require __DIR__ . '/lib/enqueue-scripts.php';

// Register meta boxes.
require __DIR__ . '/lib/meta-boxes.php';

// Block Templates.
require __DIR__ . '/lib/block-templates.php';

// Dynamic Blocks.
require __DIR__ . '/blocks/dynamic/index.php';
