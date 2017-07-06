<?php
/**
 * This file sets up sample layout integration for
 * Spark. All core layouts from the Layout Builder
 * plugin are removed in favor of sample layouts
 * included in Spark.
 *
 * @package Spark
 */

/**
 * Spark Sample Layouts.
 *
 * @since 0.1.0
 */
class Spark_Layouts {

	/**
	 * Only instance of object.
	 *
	 * @var Spark_Sample_Layouts
	 */
	private static $instance = null;

	/**
	 * Creates or returns an instance of this class.
	 *
	 * @since 0.1.0
	 *
	 * @return Spark_Sample_Layouts A single instance of this class.
	 */
	public static function get_instance() {

		if ( null === self::$instance ) {

			self::$instance = new self;

		}

		return self::$instance;

	}

	/**
	 * Run Spark Layouts.
	 *
	 * @since 0.1.0
	 */
	private function __construct() {

		// add_filter( 'themeblvd_core_layouts', array( $this, 'remove' ) );

		add_filter( 'themeblvd_sample_layouts', array( $this, 'add' ) );

	}

	/**
	 * Remove core layouts from Theme Blvd Layout
	 * Builder plugin. Instead we'll add replacements
	 * suited specifically for Jump Start in the add()
	 * method.
	 *
	 * @filter themeblvd_core_layouts
	 * @since 0.1.0
	 */
	public function remove() {

		return array();

	}

	/**
	 * Add sample layouts to layout builder plugin.
	 *
	 * @filter themeblvd_sample_layouts
	 * @since 0.1.0
	 *
	 * @param array $current Current array of sample layouts to add to.
	 * @return array New layouts merged with original layouts.
	 */
	public function add( $current ) {

		/**
		 * Filter index of sample layouts added
		 * by Spark.
		 *
		 * @since 0.1.0
		 *
		 * @var array
		 */
		$add = apply_filters( 'spark_sample_layout_index', array(
			'about-01' => __( 'Spark: About 01', 'spark' ),
			// @TODO Continue to add sample layouts here.
		));

		$layouts = array();

		foreach ( $add as $id => $name ) {

			$layouts[ 'spark-' . $id ] = array(
				'name'		=> $name,
				'id'		=> 'spark-' . $id,
				'dir'		=> SPARK_PLUGIN_DIR . "/inc/layouts/{$id}/",
				'uri'		=> SPARK_PLUGIN_URI . "/inc/layouts/{$id}/",
				'assets'	=> null,
			);

		}

		/**
		 * Filter sample layouts added by Spark.
		 *
		 * @since 0.1.0
		 *
		 * @var array
		 */
		$layouts = apply_filters( 'spark_sample_layouts', $layouts );

		return array_merge( $current, $layouts );

	}

}
