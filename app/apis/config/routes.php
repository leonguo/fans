<?php
/**
 * User: wings
 * Date: 2016/10/27
 * Time: 9:40
 */
use Phalcon\Mvc\Micro\Collection as MicroCollection;
use Fans\Api\Controllers\UsersController;

$users = new MicroCollection();

// 设置主处理器，这里是控制器的实例
$users->setHandler(
    new UsersController(),true
);

// 对所有路由设置前缀
$users->setPrefix("/users");

//  使用UsersController中的index action
$users->get("/", "getPing");

// 使用UsersController中的show action
$users->get("/show/{slug}", "show");

$users->post("/pong}", "postPong");

$app->mount($users);