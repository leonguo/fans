<?php
/*
 * Date: 2016/9/14
 * Time: 17:01
 */

use Phalcon\Mvc\Router;

$router = new Router();

$router->add(
    "/",
    [
        "controller" => "index",
        "action"     => "index",
    ]
);

$router->add(
    "/test",
    [
        "controller" => "products",
        "action"     => 1,
    ]
);

return $router;