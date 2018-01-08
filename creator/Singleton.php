<?php
/**
 * Created by PhpStorm.
 * User: hebingsong
 * Date: 2018/1/8
 * Time: 下午2:57
 */


/**
 * 简单说来，单例模式的作用就是保证在整个应用程序的生命周期中，
 * 任何一个时刻，单例类的实例都只存在一个，同时这个类还必须提供一个访问该类的全局访问点。
 * 常见使用实例：数据库连接器；日志记录器（如果有多种用途使用多例模式）；锁定文件。
 *
 * Class Singleton
 */
class Singleton
{

    private static $instance;
    public static $count = 0;
    /**
     * 防止实例化
     *
     * Singleton constructor.
     */
    private function __construct()
    {
    }

    public static function getInstance():self
    {
        if (!(self::$instance instanceof Singleton)){
            self::$instance = new self;
        }
        ++self::$count;
        return self::$instance;
    }

    /**
     * 防止被反序列化
     */
    private function __wakeup()
    {

    }

    /**
     * 防止clone
     */
    private function __clone()
    {

    }
}
