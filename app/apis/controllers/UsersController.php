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
     *     tags={"user"},
     *     summary="get user",
     *     escription="获取用户的基本信息",
     *     operationId="getUsers",
     *     produces={"application/json","application/xml"},
     *     @SWG\Parameter(
     *      name="username",
     *      in="query",
     *      description="The username for app ",
     *      required=false,
     *      type="string"
     *     ),
     *     @SWG\Response(
     *     response="200",
     *     description="An example resource",
     *     @SWG\Schema(type="string"),
     *     @SWG\Header(
     *       header="X-Rate-Limit",
     *       type="integer",
     *       format="int32",
     *       description="rate limit"
     *     ),
     *     @SWG\Header(
     *       header="X-Expires-After",
     *       type="string",
     *       format="date-time",
     *       description="date time"
     *     )),
     *    @SWG\Response(response=400, description="Invalid username supplied"),
     *    @SWG\Response(response=404, description="User not found"),
     *    security={{
     *     "api_key":{}
     *    }}
     * )
     */
    public function getUsers($username)
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
        return JsonResponse::make(['ggg']);
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