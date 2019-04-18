<?php
/**
 *
 * User: wowo
 * Date: 2019/4/18 上午11:18
 */

namespace s2d\tools;

class StringTool
{
    public static function contains($object, $needle)
    {
        if (strpos(strtolower($object), strtolower($needle)) !== false) {
            return true;
        } else {
            return false;
        }
    }
}
