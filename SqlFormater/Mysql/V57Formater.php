<?php
/**
 *
 * User: wowo
 * Date: 2019/4/17 下午5:03
 */
namespace s2d\formater\mysql;

use s2d\formater\BaseFormater;
use s2d\structure\TableStructure;

class V57Formater extends BaseFormater
{

    private $file_path;

    private $sections;

    private $tables;

    public function __construct($file_path)
    {
        if (!file_exists($file_path)) {
            die('数据文件不存在');
        }
        $this->file_path = $file_path;
    }

    public function splitSections()
    {
        $file = fopen($this->file_path, 'r');
        $current_section = null;
        $current_table_name = null;
        $section_open = false;
        while (!feof($file)) {
            $line = fgets($file);
            if (!$section_open) {
                if (strpos(strtolower($line), 'create') === 0) {
                    $section_open = true;
                    $current_section = [];
                    $current_table_name = trim(array_slice(explode(' ', $line), - 2, 1)[0], '`');
                }
            } elseif (strpos(strtolower($line), ';') > 0) {
                $current_section[] = $line;
                $this->sections[$current_table_name] = $current_section;
                $section_open = false;
                $current_section = null;
                $current_table_name = null;
            } else {
                $current_section[] = $line;
            }
        }
    }

    public function geneTables()
    {
        foreach ($this->sections as $table_name => $columns) {
            $table = new TableStructure($table_name);
            foreach ($columns as $column) {
                if (strpos(strtolower($column), ';') > 0) {
                    $table->setTableInfo($column);
                } elseif (strpos(strtolower($column), 'primary key') !== false) {
                    $table->setPrimaryKey($column);
                } else {
                    $table->setColumn($column);
                }
            }
            $this->tables[] = $table;
        }
    }

    public function format()
    {
    }
}