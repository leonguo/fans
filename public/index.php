<?php
/**
 * User: guoxingjun
 * Date: 2016/8/30
 * Time: 18:30
 */
$app = new \Phalcon\Mvc\Micro();

$app->get('/', function () {
    echo "hello world!";
});

$app->handle();