<?php

use Phalcon\Di\FactoryDefault;

error_reporting(E_ALL);

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');
define('API_PATH', APP_PATH . '/apis');

try {

    /**
     * The FactoryDefault Dependency Injector automatically registers the services that
     * provide a full stack framework. These default services can be overidden with custom ones.
     */
    $di = new FactoryDefault();

    /**
     * 加载配置文件
     */

    /**
     * 加载autoload
     */

    /**
     * DI初始化
     */

    /**
     * autoload加载
     */

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Micro($di);

    $app->options('/([a-z0-9/]+)', function()
    {
        $response = new Response();
        $response->setHeader('Access-Control-Allow-Origin', '*');
        $response->setHeader('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE');
        $response->setHeader('Access-Control-Allow-Headers', 'X-Requested-With, content-type, Authorization');
        return $response;
    });

    $app->handle();

} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
