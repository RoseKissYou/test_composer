<?php
/**
 * Created by PhpStorm.
 * User: 1234
 * Date: 2019/4/28
 * Time: 10:30
 */

namespace Zxx\Test;

class Tools{

    private $name;

    public function __construct()
    {
        
    }

    public static function show()
    {
        echo "Hello Word";
    }

    //递归实现侧边栏(层级从属关系)
    public static function getTree($data, $pid = 0, $level = 1)
    {
        $list = [];
        foreach ($data as $k => $v) {
            if ($v['pid'] == $pid) {
                $v['level'] = $level;
                $v['son'] = static::getTree($data, $v['id'], $level + 1);
                $list[] = $v;
            }
        }
        return $list;
    }
}