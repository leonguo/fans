<?php
/**
 * User: wings
 * Date: 2016/10/24
 * Time: 19:40
 */

$di->set('config',$config,true);

$di->setShared('mongo', function () {
    $mongo = new \MongoDB\Client('mongodb://localhost:27017');
    return $mongo->selectDB('test');
});

$di->set('collectionManager',function () {
    return new Phalcon\Mvc\Collection\Manager();
},true);
