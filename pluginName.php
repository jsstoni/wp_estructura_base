<?php
/**
* Plugin Name: Nombre para el plugin de WordPress
* Plugin URI: https://miweb.com
* Description: Añade una descripción para el plugins de WordPress
* Author: Nombre de autor
* Author URI: https://miweb.com
* Version: 1.0
* License: GPLv2
* Text Domain: pluginName
*/
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

define('PATH_PLUGIN', plugin_dir_path(__FILE__));
define('DIR_URL', plugin_dir_url(__FILE__));

if (is_admin() || (defined( 'WP_CLI' ) && WP_CLI)) {
	require_once( PATH_PLUGIN . 'includes/pluginName.class.php' );
	$app = new pluginName();
	register_activation_hook(__FILE__, [$app, 'active']);
	register_deactivation_hook(__FILE__, [$app, 'desactive']);
}