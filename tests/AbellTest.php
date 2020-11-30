<?php

namespace Abell\TestComposer;

use Abell\TestComposer\AeTools;

class AbellTest
{
    public function hello()
    {
//        $result = Tools::hello();
//        var_dump($result);
        $result = AeTools::aeHello();
        return $result;
    }
}


var_dump('start');
$hh = new AbellTest();
$hh->hello();
var_dump('End');