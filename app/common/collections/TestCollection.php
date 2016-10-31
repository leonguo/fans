<?php
/**
 * User: wings
 * Date: 2016/10/28
 * Time: 11:40
 */
namespace Fans\Common\Collections;

use Phalcon\Mvc\MongoCollection;

class TestCollection extends MongoCollection
{
    public $title;

    public function getSource()
    {
        return 'test';
    }
}