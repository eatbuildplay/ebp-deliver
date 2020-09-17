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

define( 'EBP_DELIVERY_PATH', plugin_dir_path( __FILE__ ) );
define( 'EBP_DELIVERY_URL', plugin_dir_url( __FILE__ ) );
define( 'EBP_DELIVERY_VERSION', '1.0.0' );

namespace EBP_Deliver;

class Plugin {

  public function __construct() {



  }

}

new Plugin();
