<?php
/**
 * User: wings
 * Date: 2016/10/28
 * Time: 11:40
 */
namespace Fans\Common\Collections;

use Phalcon\Mvc\Collection;

class TestCollection extends Collection
{
   public function initialize()
   {
        $this->setSource('test');
   }
}