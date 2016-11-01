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

//        $test = new TestCollection();
//        $test->title="dad";
//        $test->save();

//        $data = TestCollection::findFirst();
//        var_dump($data->title);
//        var_dump($data->toArray());

        $all = TestCollection::find();
        foreach ($all as $item){
//            var_dump($item->toArray());
            echo '<br>';
        }

        $collection = new TestCollection();
        var_dump($collection->getOne());
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