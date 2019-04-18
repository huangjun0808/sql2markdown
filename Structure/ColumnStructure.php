<?php
/**
 *
 * User: wowo
 * Date: 2019/4/17 下午4:25
 */

namespace s2d\structure;

use s2d\tools\StringTool;

class ColumnStructure
{
    private static $allowed_types = ['bigint', 'tinyint', 'int', 'varchar', 'char', 'text', 'blob'];

    /**
     * @var $name string
     */
    private $name;

    /**
     * @var $type string
     */
    private $type;

    /**
     * @var $length int
     */
    private $length;

    /**
     * @var $default_value string
     */
    private $default_value;

    /**
     * @var $not_null bool
     */
    private $not_null = false;

    /**
     * @var $auto_increment bool
     */
    private $auto_increment = false;

    /**
     * @var $comment string
     */
    private $comment;

    public function __construct($str)
    {
        if (StringTool::contains($str, 'NOT NULL')) {
            $this->not_null = true;
        }

        preg_match("/.*`(.*)`.*/i", $str, $result);
        if (isset($result[1])) {
            $this->name = $result[1];
        }

        preg_match("/.*COMMENT '(.*)'.*/i", $str, $result);
        if (isset($result[1])) {
            $this->comment = $result[1];
        }

        foreach (self::$allowed_types as $type) {
            if (StringTool::contains($str, $type)) {
                $this->type = $type;
                preg_match("/.*$type\((.*)\)/i", $str, $result);
                if (isset($result[1])) {
                    $this->length = $result[1];
                }
                break;
            }
        }

        preg_match("/.*DEFAULT '(.*)'.*/", $str, $result);
        if (isset($result[1])) {
            $this->default_value = $result[1];
        }

        if (StringTool::contains($str, 'auto_increment')) {
            $this->auto_increment = true;
        }
    }
}
