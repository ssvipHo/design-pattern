<?php
/**
 * Created by PhpStorm.
 * User: hebingsong
 * Date: 2018/1/8
 * Time: 下午4:47
 */
namespace creator\builder;

abstract class Phone
{
    public $cpu;
    public $camera;
    public $screen;
    public $system;

    /**
     * 不同系统不同实现
     *
     * @return mixed
     */
    abstract public function setSystem();

    public function setCpu(string $cpu){
        $this->cpu = $cpu;
    }

    public function setScreen(string $Screen){
        $this->screen = $Screen;
    }

    public function setCamera(string $Camera){
        $this->camera = $Camera;
    }

}