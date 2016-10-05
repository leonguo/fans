<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'Fans\Models' => APP_PATH . '/common/models/',
    'Fans'        => APP_PATH . '/common/library/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'Fans\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'Fans\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php'
]);

$loader->register();
