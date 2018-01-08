<?php
/**
 * Created by PhpStorm.
 * User: hebingsong
 * Date: 2018/1/8
 * Time: 下午4:07
 */

namespace creator\abstractFactory;
require_once __DIR__ . '/DateOp.php';


class Linux extends FileOp
{
    public $config = [];

    public function getConfig(): array
    {
        // TODO: Implement getConfig() method.
        return $this->config;
    }

    public function read($path)
    {

    }

    public function write($path, $data)
    {

    }

    public function save($path, $data)
    {

    }

    public function deleted($path)
    {
        echo 'This is Linux\'s delete func' . PHP_EOL;
    }
}