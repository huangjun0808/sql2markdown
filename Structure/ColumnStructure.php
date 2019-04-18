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

        preg_match("/.*DEFAULT '(.*?)'.*/", $str, $result);
        if (isset($result[1])) {
            $this->default_value = $result[1];
        }

        if (StringTool::contains($str, 'auto_increment')) {
            $this->auto_increment = true;
        }
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param int $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->default_value;
    }

    /**
     * @param string $default_value
     */
    public function setDefaultValue($default_value)
    {
        $this->default_value = $default_value;
    }

    /**
     * @return boolean
     */
    public function isNotNull()
    {
        return $this->not_null;
    }

    /**
     * @param boolean $not_null
     */
    public function setNotNull($not_null)
    {
        $this->not_null = $not_null;
    }

    /**
     * @return boolean
     */
    public function isAutoIncrement()
    {
        return $this->auto_increment;
    }

    /**
     * @param boolean $auto_increment
     */
    public function setAutoIncrement($auto_increment)
    {
        $this->auto_increment = $auto_increment;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }
}
