<?php

class WTP_SOW_WIDGETS {

  function __construct(){
    add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );
    add_filter( 'siteorigin_widgets_widget_folders', array( $this, 'add_widget_folder' ) );
  }

  function add_widget_folder( $folders ){
    $folders[] = WTP_SOW_PATH.'widgets/';
    return $folders;
  }

  function assets(){
    wp_enqueue_script( 'sow-typed-js', WTP_SOW_URI.'/assets/js/wtp-ai-prompt.js', array('jquery'), WTP_SOW_VERSION, true );
  }

}

new WTP_SOW_WIDGETS();
