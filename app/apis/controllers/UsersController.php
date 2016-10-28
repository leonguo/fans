<?php
/**
 * User: wings
 * Date: 2016/10/24
 * Time: 17:39
 */
namespace Fans\Api\Controllers;

use Fans\Common\Collections\TestCollection;
use Fans\Common\Utils\JsonResponse;

class UsersController extends ControllerBase
{

    public function getPing()
    {
//         TestCollection::findFirst();
        $db = new \MongoDB\Client();
        $test = $db->selectDatabase('test')->selectCollection('test');
        $test->insertOne(['title'=>'gxj']);
        $data = $test->findOne(['title'=>'gxj']);
        var_dump($data);
        echo 'pong';
    }

    public function postPong()
    {
        echo 'ping';
    }

    public function show($slug)
    {
        return JsonResponse::make(['data'=>$slug]);
    }
}