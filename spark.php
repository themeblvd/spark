<?php
/**
 * Plugin Name: Spark
 * Description: Tools to get started with Jump Start.
 * Version: 0.1.0
 * Author: Theme Blvd
 * Author URI: http://themeblvd.com
 * License: GPL2
 *
 * Copyright 2017  Theme Blvd
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2,
 * as published by the Free Software Foundation.
 *
 * You may NOT assume that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * The license for this software can likely be found here:
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package Spark
 */

define( 'SPARK_PLUGIN_VERSION', '0.1.0' );
define( 'SPARK_PLUGIN_DIR', dirname( __FILE__ ) );
define( 'SPARK_PLUGIN_URI', plugins_url( '' , __FILE__ ) );
define( 'SPARK_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

/**
 * Run Spark plugin.
 *
 * @since 0.1.0
 */
function spark_init() {

	include_once( SPARK_PLUGIN_DIR . '/inc/class-spark.php' );

	Spark::get_instance();

}
spark_init();
