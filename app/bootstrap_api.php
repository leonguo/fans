<?php

use Phalcon\Di\FactoryDefault;

error_reporting(E_ALL);

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');
define('API_PATH', APP_PATH . '/apis');

//加载接口初始文件


try {

    /**
     * DI初始化
     */
    $di = new FactoryDefault();

    /**
     * 加载配置文件
     */
    $config = include API_PATH.'/config/config.php';

    /**
     * 加载autoload
     */
    include API_PATH.'/config/loader.php';

    /**
     * DI容器加载
     */
    include API_PATH.'/config/services.php';

    /**
     * Handle the request
     */
    $app = new \Phalcon\Mvc\Micro($di);

    /**
     * 加载路由
     */
    include API_PATH.'/config/router.php';

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
