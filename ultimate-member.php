<?php
/*
Plugin Name: UM Kexxel
Plugin URI: http://ultimatemember.com/
Description: Custom Ultimate Member Plugin for Kexxel
Version: 1.0.0
Author: Ultimate Member
Author URI: http://ultimatemember.com/
Text Domain: ultimate-member
*/

defined( 'ABSPATH' ) || exit;

require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
$plugin_data = get_plugin_data( __FILE__ );

define( 'um_url', plugin_dir_url( __FILE__ ) );
define( 'um_path', plugin_dir_path( __FILE__ ) );
define( 'um_plugin', plugin_basename( __FILE__ ) );
define( 'ultimatemember_version', $plugin_data['Version'] );
define( 'ultimatemember_plugin_name', $plugin_data['Name'] );

require_once 'includes/class-functions.php';
require_once 'includes/class-init.php';
