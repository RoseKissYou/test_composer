<?php

namespace Abell\TestComposer;

class AeTools
{
    public static function hello()
    {
        return 'hello kitty';
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