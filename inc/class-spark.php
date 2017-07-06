<?php
/**
 * This file includes the primary setup for the
 * Spark plugin. The Spark class includes and
 * instantiates any other classes in the plugin.
 *
 * @package Spark
 */

/**
 * Setup Spark plugin.
 *
 * @since 0.1.0
 */
class Spark {

	/**
	 * Only instance of object.
	 *
	 * @var Spark
	 */
	private static $instance = null;

	/**
	 * Creates or returns an instance of this class.
	 *
	 * @since 0.1.0
	 *
	 * @return Spark A single instance of this class.
	 */
	public static function get_instance() {

		if ( null === self::$instance ) {

			self::$instance = new self;

		}

		return self::$instance;

	}

	/**
	 * Run Spark.
	 *
	 * @since 0.1.0
	 */
	private function __construct() {

		include_once( SPARK_PLUGIN_DIR . '/inc/class-spark-layouts.php' );

		Spark_Layouts::get_instance();

		add_action( 'init', array( $this, 'localize' ) );

	}

	/**
	 * Add plugin localization.
	 */
	public function localize() {

		load_plugin_textdomain( 'spark' );

	}

}
