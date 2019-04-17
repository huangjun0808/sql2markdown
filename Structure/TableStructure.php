<?php
/**
 *
 * User: wowo
 * Date: 2019/4/17 下午4:24
 */

namespace s2d;


class TableStructure
{
    private $table_name;
    private $table_comment;
    private $columns;
    private $endine;
    private $default_charset;
    private $indexes;

    public function __construct($content)
    {
    }
}
