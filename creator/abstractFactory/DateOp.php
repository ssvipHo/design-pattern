<?php
/**
 * Created by PhpStorm.
 * User: hebingsong
 * Date: 2018/1/8
 * Time: 下午4:01
 */

/**
 * 1、模式概述
 * 抽象工厂模式为一组相关或相互依赖的对象创建提供接口，而无需指定其具体实现类。
 * 抽象工厂的客户端不关心如何创建这些对象，只关心如何将它们组合到一起。
 *
 * 2、问题引出
 * 举个例子，如果某个应用是可移植的，那么它需要封装平台依赖，
 * 这些平台可能包括窗口系统、操作系统、数据库等等。这种封装如果未经设计，
 * 通常代码会包含多个 if 条件语句以及对应平台的操作。这种硬编码不仅可读性差，而且扩展性也不好。
 *
 * 3、解决方案
 * 提供一个间接的层（即“抽象工厂”）抽象一组相关或依赖对象的创建而不是直接指定具体实现类。
 * 该“工厂”对象的职责是为不同平台提供创建服务。客户端不需要直接创建平台对象，而是让工厂去做这件事。
 *
 * 这种机制让替换平台变得简单，因为抽象工厂的具体实现类只有在实例化的时候才出现，
 * 如果要替换的话只需要在实例化的时候指定具体实现类即可。
 */
namespace creator\abstractFactory;

abstract class FileOp
{
    abstract public function getConfig(): array;

    abstract public function read($path);

    abstract public function write($path, $data);

    abstract public function save($path, $data);

    abstract public function deleted($path);
}