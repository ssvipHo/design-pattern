<?php
/**
 * Created by PhpStorm.
 * User: hebingsong
 * Date: 2018/1/8
 * Time: 下午5:10
 */

namespace creator\builder;
require_once __DIR__ . '/Phone.php';

class IphonePhone extends Phone
{
    /**
     * 不同系统不同实现
     *
     * @return mixed
     */
    public function setSystem()
    {
        // TODO: Implement setSystem() method.
        $this->system = 'IOS system';
    }
}