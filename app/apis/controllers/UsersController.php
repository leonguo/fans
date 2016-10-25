<?php
/**
 * User: wings
 * Date: 2016/10/24
 * Time: 17:39
 */
namespace Fans\Modules\Api\Controller;

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
}