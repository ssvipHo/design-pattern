<?php
/**
 * Created by PhpStorm.
 * User: hebingsong
 * Date: 2018/1/8
 * Time: 下午4:14
 */


require __DIR__ . '/Linux.php';
require __DIR__ . '/Wins.php';
use creator\abstractFactory\Linux;
use creator\abstractFactory\Wins;

$file = new Linux();
$wFile = new Wins();

$file->deleted("a");
$wFile->deleted("a");