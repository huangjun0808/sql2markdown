<?php
/**
 *
 * User: wowo
 * Date: 2019/4/17 下午4:25
 */

namespace s2d\structure;

class ColumnStructure
{
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
    private $not_null;

    /**
     * @var $auto_increment bool
     */
    private $auto_increment;

    /**
     * @var $comment string
     */
    private $comment;

    public function __construct()
    {
    }
}
