<?php
/**
 * Created by PhpStorm.
 * User: hebingsong
 * Date: 2018/1/8
 * Time: 下午4:58
 */

namespace creator\builder;

class Director
{
    public $cpu;
    public $screen;
    public $camera;

    public function __construct(string $cpu, string $screen, string $camera)
    {
        $this->camera = $camera;
        $this->cpu = $cpu;
        $this->screen = $screen;
    }

    public function build(Builder $builder)
    {
        $builder->buildScreen($this->screen);
        $builder->buildSystem();
        $builder->buildCpu($this->cpu);
        $builder->buildCamera($this->camera);
        print_r($builder->__tostring());
    }

}