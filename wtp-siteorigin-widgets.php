<?php
/*
  Plugin Name: WTP SiteOrigin Widgets
  Plugin URI: https://sputznik.com/
  Description: SiteOrigin Addon widgets
  Version: 1.0.0
  Author: Stephen Anil (Sputznik)
  Author URI: https://sputznik.com/
*/

if( ! defined( 'ABSPATH' ) ){ exit; }

/*  CONSTANTS */
if( !defined( 'WTP_SOW_VERSION' ) ){
  define( 'WTP_SOW_VERSION', time() );
}

if( !defined( 'WTP_SOW_PATH' ) ){
  define( 'WTP_SOW_PATH', plugin_dir_path( __FILE__ ) );
}

if( !defined( 'WTP_SOW_URI' ) ){
  define( 'WTP_SOW_URI', plugin_dir_url( __DIR__ ).'wtp-siteorigin-widgets/' );
}

// INCLUDE FILES
$inc_files = array(
  'lib/class-wtp-siteorigin-widgets.php'
);

foreach( $inc_files as $inc_file ){ require_once( $inc_file ); }
