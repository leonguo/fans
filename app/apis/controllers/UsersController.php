<?php
/**
 * User: wings
 * Date: 2016/10/24
 * Time: 17:39
 */
namespace Fans\Api\Controllers;

use Fans\Common\Utils\JsonResponse;

class UsersController extends ControllerBase
{

    public function getPing()
    {
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