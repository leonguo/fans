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
        $data = TestCollection::findFirst();
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