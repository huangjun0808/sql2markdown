<?php
/**
 *
 * User: wowo
 * Date: 2019/4/17 下午4:24
 */

namespace s2d\structure;

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
                if (strpos($item, 'engine') !== false) {
                    $this->engine = trim(end(explode('=', $item)), ';');
                } elseif (strpos($item, 'charset') !== false) {
                    $this->default_charset = trim(end(explode('=', $item)), ';');
                } elseif (strpos($item, 'comment') !== false) {
                    $this->table_comment = trim(end(explode('=', $item)), ';');
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
    }
}
