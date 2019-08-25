<?php
/**
 * Simple Itec Dashboard functions and definitions
 *
 * @link https://github.com/simple-itec/wordpress-dashboard/wp-themes/simpleitec-dashboard
 *
 * @package WordPress
 * @subpackage SimpleItec_Dashboard
 * @since 1.0.0
 */

/**
 * Simple ITec Dashboard only works in WordPress 4.9 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.9', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}
