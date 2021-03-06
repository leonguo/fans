<?php
/**
 * User: wings
 * Date: 2016/10/24
 * Time: 19:35
 */

$loader = new \Phalcon\Loader();

$loader->registerNamespaces([
    'Fans\Api\Controllers' => $config->application->Controllers,
    'Fans\Api\Models' => $config->application->Models,
    'Fans\Common\Utils' => $config->application->Utils,
    'Fans\Common\Collections' => $config->application->Collections,
]);

$loader->register();