<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that also follow
 * WordPress coding standards and PHP best practices.
 *
 * @package   WP_Slider_Sponsors
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2013 Your Name or Company Name
 *
 * @wordpress-plugin
 * Plugin Name: WP Slider Sponsors
 * Plugin URI:  TODO
 * Description: Slider de sponsors
 * Version:     1.0.0
 * Author:      TODO
 * Author URI:  TODO
 * Text Domain: wp-slider-sponsors-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// TODO: replace `class-wp-slider-sponsors.php` with the name of the actual plugin's class file
require_once( plugin_dir_path( __FILE__ ) . 'class-wp-slider-sponsors.php' );

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
// TODO: replace WP_Slider_Sponsors with the name of the plugin defined in `class-wp-slider-sponsors.php`
register_activation_hook( __FILE__, array( 'WP_Slider_Sponsors', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'WP_Slider_Sponsors', 'deactivate' ) );

// TODO: replace WP_Slider_Sponsors with the name of the plugin defined in `class-wp-slider-sponsors.php`
WP_Slider_Sponsors::get_instance();