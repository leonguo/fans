<?php
/**
 * User: wings
 * Date: 2016/10/24
 * Time: 19:31
 */

namespace Fans\Common\Utils;

class SecurityApp
{
    public static function authentication($app)
    {
        //routes with authentication false
        $method = strtolower($app->router->getMatchedRoute()->getHttpMethods());
        $unAuthenticated = $app->routeAllowed();
        if (isset($unAuthenticated[$method])) {
            $unAuthenticated = array_flip($unAuthenticated[$method]);
            if (isset($unAuthenticated[$app->router->getMatchedRoute()->getPattern()])) {
                return true;
            }
        }
        //user authentication logic here
        throw new \HttpException(
            'Your not allowed!.',
            401,
            array(
                'dev' => 'Your not allowed!',
                'internalCode' => 'AT401',
                'more' => 'Your not allowed!'
            )
        );

    }
}