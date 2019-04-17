<?php
/**
 *
 * User: wowo
 * Date: 2019/4/17 下午4:24
 */

namespace s2d;

class TableStructure
{
    /**
     * @var $table_name string
     * @var $table_comment string
     * @var $columns ColumnStructure
     * @var $engine string
     * @var $default_charset string
     * @var $indexes IndexStructure
     */
    private $table_name;
    private $table_comment;
    private $columns;
    private $engine;
    private $default_charset;
    private $indexes;

    public function __construct($content)
    {
    }
}
