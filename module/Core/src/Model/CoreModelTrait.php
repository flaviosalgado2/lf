<?php

namespace Core\Model;

use Laminas\Hydrator\Reflection;

trait CoreModelTrait
{

    public function exchangeArray(array $data)
    {
        //facilita exchangeArray
        (new Reflection())->hydrate($data, $this);
    }

    public function getArrayCopy()
    {
        //facilita usar getArrayCopy
        return (new Reflection())->extract($this);
    }
}
