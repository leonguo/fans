<?php
/**
 * User: wings
 * Date: 2016/10/24
 * Time: 17:38
 */
$collection = [
    'prefix' => '/users/',
    'handler' => 'Controllers\UsersController',
    'lazy' => TRUE,
    'collection' => [
        [
            'method' => 'get',
            'route' => 'ping',
            'function' => 'getPing',
            'authentication' => FALSE
        ],
        [
            'method' => 'post',
            'route' => 'pong',
            'function' => 'postPong',
            'authentication' => FALSE
        ]
    ]
];
return $collection;