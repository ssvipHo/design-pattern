<?php
/**
 * Created by PhpStorm.
 * User: hebingsong
 * Date: 2018/1/8
 * Time: 下午5:30
 */

require_once __DIR__ . '/Director.php';
require_once __DIR__ . '/SonyBuilder.php';
require_once __DIR__ . '/IphoneBuilder.php';
use creator\builder\Director;

$obj = new Director('Scpu', 'Sscreen', 'Scamera');

$obj->build(new \creator\builder\SonyBuilder());
$obj->build(new \creator\builder\IphoneBuilder());