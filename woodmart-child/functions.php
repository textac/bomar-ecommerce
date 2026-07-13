<?php
/**
 * Bom Ar Condicionado child theme functions.
 *
 * @package BomArCondicionado
 */

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'BOM_AR_CONDICIONADO_VERSION' ) ) {
	define( 'BOM_AR_CONDICIONADO_VERSION', '0.1.0' );
}

if ( ! defined( 'BOM_AR_CONDICIONADO_PATH' ) ) {
	define( 'BOM_AR_CONDICIONADO_PATH', trailingslashit( get_stylesheet_directory() ) );
}

if ( ! defined( 'BOM_AR_CONDICIONADO_URI' ) ) {
	define( 'BOM_AR_CONDICIONADO_URI', trailingslashit( get_stylesheet_directory_uri() ) );
}

/**
 * Loads child theme text domain and declares theme support.
 *
 * @return void
 */
function bom_ar_condicionado_setup() {
	load_child_theme_textdomain( 'bom-ar-condicionado', BOM_AR_CONDICIONADO_PATH . 'languages' );

	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'bom_ar_condicionado_setup', 20 );

/**
 * Enqueues child theme assets.
 *
 * @return void
 */
function bom_ar_condicionado_enqueue_assets() {
	$style_path  = BOM_AR_CONDICIONADO_PATH . 'assets/css/main.css';
	$script_path = BOM_AR_CONDICIONADO_PATH . 'assets/js/main.js';

	if ( file_exists( $style_path ) ) {
		wp_enqueue_style(
			'bom-ar-condicionado-main',
			BOM_AR_CONDICIONADO_URI . 'assets/css/main.css',
			array( 'woodmart-style' ),
			filemtime( $style_path )
		);
	}

	if ( file_exists( $script_path ) ) {
		wp_enqueue_script(
			'bom-ar-condicionado-main',
			BOM_AR_CONDICIONADO_URI . 'assets/js/main.js',
			array(),
			filemtime( $script_path ),
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'bom_ar_condicionado_enqueue_assets', 20 );
