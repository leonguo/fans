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
    /**
     * @SWG\Get(
     *     path="/users",
     *     @SWG\Response(response="200", description="An example resource")
     * )
     */
    public function getPing()
    {

//        $test = new TestCollection();
//        $test->title="dad";
//        $test->save();

//        $data = TestCollection::findFirst();
//        var_dump($data->title);
//        var_dump($data->toArray());

        $all = TestCollection::find();

        $collection = new TestCollection();
        $data = $collection->getOne();
//        $data = \MongoDB\BSON\toJSON();
        JsonResponse::make(['dada'=>2314]);
    }

    /**
     * @SWG\Post(
     *     path="/users/pong",
     *     @SWG\Response(response="200", description="An example resource")
     * )
     */
    public function postPong()
    {
        echo 'ping';
    }

    /**
     * @SWG\Get(
     *     path="/users/show/",
     *     @SWG\Response(response="200", description="An example resource")
     * )
     */
    public function show($slug)
    {
        return JsonResponse::make(['data'=>$slug]);
    }
}