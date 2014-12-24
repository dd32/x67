<?php
/**
 * Plugin Name: x67
 * Version: 0.1.%GITHUB_MERGE_SVN_REV%
 * Plugin URI: https://wordpress.org/plugins/x67/
 * Description: A plugin to mock/test a new UI for the WordPress updates screen.
 * Author: The WordPress Community
 * License: GPLv2 or later
 * Text Domain: x67
 */

class x67_Updates {
	// Singleton
	public static function init() {
		static $instance = null;

		if ( ! $instance ) {
			$instance = new x67_Updates();
		}
	
		return $instance;
	}

	private function __construct() {
		add_action( 'admin_init', array( $this, 'admin_init' ) );
	}

	public function admin_init() {
	}
}
x67_Updates::init();
