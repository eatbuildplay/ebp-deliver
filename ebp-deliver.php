<?php

/**
 *
 * Plugin Name: EBP Deliver
 * Plugin URI: https://eatbuildplay.com/plugins/ebp-deliver/
 * Description: Provides integrations for deliver of services and billing to clients.
 * Version: 1.0.0
 * Author: Casey Milne, Eat/Build/Play
 * Author URI: https://eatbuildplay.com/
 * License: GPL3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 *
 */

namespace EBP_Deliver;

define( 'EBP_DELIVERY_PATH', plugin_dir_path( __FILE__ ) );
define( 'EBP_DELIVERY_URL', plugin_dir_url( __FILE__ ) );
define( 'EBP_DELIVERY_VERSION', '1.0.0' );

class Plugin {

  public function __construct() {



  }

  public static function activation() {

    require_once( EBP_DELIVERY_PATH . 'src/Activation.php' );
    $act = new Activation();
    $act->makeDashboardPage();

  }

  public static function deactivation() {

    require_once( EBP_DELIVERY_PATH . 'src/Deactivation.php' );
    $dec = new Deactivation();
    $dec->removeDashboardPage();

  }

}

new Plugin();


/*
 * Activation Hook
 */
register_activation_hook( __FILE__, '\EBP_Deliver\Plugin::activation', 10 );

/*
 * Deactivation Hook
 */
register_deactivation_hook( __FILE__, '\EBP_Deliver\Plugin::deactivation', 10 );
