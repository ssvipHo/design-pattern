<?php
/**
 * Created by PhpStorm.
 * User: hebingsong
 * Date: 2018/1/8
 * Time: 下午4:57
 */

namespace creator\builder;
require_once __DIR__ . '/Builder.php';
require_once __DIR__ . '/IphonePhone.php';

class IphoneBuilder implements Builder
{
    /**
     * @var IphonePhone
     */
    public $phone;

    public function __construct()
    {
        $this->phone = new IphonePhone();
    }

    public function buildCamera(string $camera)
    {
        $this->phone->setCamera($camera);
    }

    public function buildScreen(string $screen)
    {
        $this->phone->setScreen($screen);
    }

    public function buildCpu(string $cpu)
    {
        $this->phone->setCpu($cpu);
    }

    public function buildSystem()
    {
        $this->phone->setSystem();
    }

    public function __toString():string
    {
        return "SonyPhone [mCPU=" . $this->phone->cpu . ", mCamera=" . $this->phone->camera
               . ", mScreen=" . $this->phone->screen . ", mSystem=" . $this->phone->system . "]";
    }
}