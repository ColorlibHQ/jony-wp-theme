<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'JONY_DIR_URI' ) ) {
	define( 'JONY_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'JONY_DIR_ASSETS_URI' ) ) {
	define( 'JONY_DIR_ASSETS_URI', JONY_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'JONY_DIR_CSS_URI' ) ) {
	define( 'JONY_DIR_CSS_URI', JONY_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'JONY_DIR_JS_URI' ) ) {
	define( 'JONY_DIR_JS_URI', JONY_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'JONY_DIR_IMGS_URI' ) ) {
	define( 'JONY_DIR_IMGS_URI', JONY_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'JONY_DIR_ICON_IMG_URI' ) ) {
	define( 'JONY_DIR_ICON_IMG_URI', JONY_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'JONY_DIR_PATH' ) ) {
	define( 'JONY_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'JONY_DIR_PATH_INC' ) ) {
	define( 'JONY_DIR_PATH_INC', JONY_DIR_PATH . 'inc/' );
}

//Jony Libraries Folder Directory
if ( ! defined( 'JONY_DIR_PATH_LIBS' ) ) {
	define( 'JONY_DIR_PATH_LIBS', JONY_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'JONY_DIR_PATH_CLASSES' ) ) {
	define( 'JONY_DIR_PATH_CLASSES', JONY_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'JONY_DIR_PATH_HOOKS' ) ) {
	define( 'JONY_DIR_PATH_HOOKS', JONY_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function jony_admin_script(){
    wp_enqueue_style( 'jony-admin', get_template_directory_uri().'/assets/css/jony-admin.css', false, '1.0.0' );
    // wp_enqueue_script( 'jony_admin', get_template_directory_uri().'/assets/js/jony-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'jony_admin_script' );



/**
 * Include File
 *
 */
require_once( JONY_DIR_PATH_INC . 'jony-breadcrumbs.php' );
require_once( JONY_DIR_PATH_INC . 'jony-widgets-reg.php' );
require_once( JONY_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( JONY_DIR_PATH_INC . 'post-like.php' );
require_once( JONY_DIR_PATH_INC . 'jony-functions.php' );
require_once( JONY_DIR_PATH_INC . 'jony-commoncss.php' );
require_once( JONY_DIR_PATH_INC . 'support-functions.php' );
require_once( JONY_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( JONY_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( JONY_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( JONY_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( JONY_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( JONY_DIR_PATH_HOOKS . 'hooks.php' );
require_once( JONY_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( JONY_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( JONY_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Jony object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Jony = new Jony();