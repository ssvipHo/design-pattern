<?php
/**
 * Created by PhpStorm.
 * User: hebingsong
 * Date: 2018/1/8
 * Time: 下午4:52
 */

namespace creator\builder;


interface Builder
{
    public function buildCpu(string $cpu);
    public function buildCamera(string $camera);
    public function buildScreen(string $screen);
    public function buildSystem();

    public function __toString();
}