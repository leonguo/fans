<?php
/**
 * User: guoxingjun
 * Date: 2016/8/30
 * Time: 18:30
 */
$app = new \Phalcon\Mvc\Micro();


$di = new \Phalcon\Di();

$di->set("router",
    function () {
        $router = require __DIR__ . "/../apps/admin/config/routes.php";
        return $router;
    });

$app->setDI($di);

$app->handle();