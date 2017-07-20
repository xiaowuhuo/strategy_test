<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/20
 * Time: 下午8:04
 *
 * http://www.runoob.com/design-pattern/strategy-pattern.html
 *
 */
namespace Lib;

class Context implements work {
    private $strategy;

    public function run()
    {
        $this->strategy->checkFlow();
    }

    public function __construct(strategy $strategy)
    {
        $this->strategy = $strategy;
    }
}