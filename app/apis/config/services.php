<?php
/**
 * User: wings
 * Date: 2016/10/24
 * Time: 19:40
 */

$di->set('config',$config,true);

$di->setShared('mongo', function () {
    $config = $this->getShared('config');
    if (!$config->database->mongo->username || !$config->database->mongo->password) {
        $dsn = "mongodb://" . $config->database->mongo->host;
    } else {
        $dsn = sprintf(
            "mongodb://%s:%s@%s",$config->database->mongo->username, $config->database->mongo->password, $config->database->mongo->host
        );
    }
    $mongo = new \Phalcon\Db\Adapter\MongoDB\Client($dsn);
    return $mongo->selectDatabase($config->database->mongo->dbname);
});

$di->set('collectionManager',function () {
    return new Phalcon\Mvc\Collection\Manager();
},true);
