<?php
/**
 *
 * User: wowo
 * Date: 2019/4/17 下午4:20
 */
namespace s2d;

require_once "./vendor/autoload.php";

use s2d\formater\mysql\V57Formater;

$formater = new V57Formater('1.sql');
$formater->splitSections();
$formater->geneTables();
$formater->formatOutput();
