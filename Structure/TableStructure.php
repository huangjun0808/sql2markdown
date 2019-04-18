<?php
/**
 *
 * User: wowo
 * Date: 2019/4/17 下午4:24
 */

namespace s2d\structure;

use s2d\tools\StringTool;

class TableStructure
{
    /**
     * @var $table_name string
     */
    private $table_name;

    /**
     * @var $table_comment string
     */
    private $table_comment;

    /**
     * @var $columns ColumnStructure
     * collections of columns
     */
    private $columns;

    /**
     * @var $engine string
     */
    private $engine;

    /**
     * @var $default_charset string
     */
    private $default_charset;

    /**
     * @var $indexes IndexStructure
     * collections of indexes
     */
    private $indexes;

    public function __construct($table_name)
    {
        $this->table_name = $table_name;
    }

    public function setTableInfo($str)
    {
        $items = explode(' ', trim($str, "\n"));
        foreach ($items as $item) {
            if (strpos($item, '=') !== false) {
                $item = strtolower($item);
                $item = explode('=', $item);
                if ($item[0] == 'engine') {
                    $this->engine = trim($item[1], ';');
                } elseif ($item[0] == 'charset') {
                    $this->default_charset = trim($item[1], ';');
                } elseif ($item[0] == 'comment') {
                    $this->table_comment = trim($item[1], ';');
                }
            }
        }
    }

    public function setPrimaryKey($str)
    {
        return;
    }

    public function setColumn($str)
    {
        $column = new ColumnStructure($str);
        $this->columns[] = $column;
    }
}
