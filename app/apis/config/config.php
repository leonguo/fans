<?php
/**
 * User: wings
 * Date: 2016/10/24
 * Time: 17:37
 */

return new \Phalcon\Config([
    'api_name' => "app-name",
    "application" => [
        'Controllers' => API_PATH.'/controllers',
        'Models' => API_PATH.'/models'
    ],
]);