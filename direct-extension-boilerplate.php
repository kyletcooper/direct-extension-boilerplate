<?php

/**
 * Plugin Name: Boilerplate - Direct Theme Extension
 * Plugin URI: https://webresultsdirect.com/
 * Description: An example base to start a Direct Theme extension.
 * Version: 1.0.0
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Web Results Direct
 * Author URI: https://webresultsdirect.com/
 */

namespace wrd;


define('DIRECT_EXTENSION_BOILERPLATE_PLUGIN', __FILE__);
define('DIRECT_EXTENSION_BOILERPLATE_DIR', __DIR__);
define('DIRECT_EXTENSION_BOILERPLATE_URI', plugin_dir_url(__FILE__));


// Await Direct Theme Setup
// Direct theme's classes are not hooked so we don't need to wait long for them.
add_action("direct_ready", function () {
    new ThemeExtension(__FILE__, [
        "settings_page" => admin_url("admin.php?page=direct-marketing"),
    ]);

    // require_once DIRECT_EXTENSION_BOILERPLATE_DIR . 'config.php';
}, PHP_INT_MIN, 0);
