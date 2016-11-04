<?php
/**
 * User: wings
 * Date: 2016/11/4
 * Time: 16:11
 */
header("Access-Control-Allow-Origin: *");
$apiDir = dirname(dirname(__DIR__));
include $apiDir."/vendor/autoload.php";
$swagger = \Swagger\scan($apiDir.'/app/apis');
header('Content-Type: application/json');
echo $swagger;