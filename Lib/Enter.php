<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/20
 * Time: 下午8:19
 */
namespace Lib;
/**
 * 进件
 * Class Enter
 */
class Enter{
    private $_userId;
    private $_usedStrategy;

    public function __construct($strategy)
    {
        $this->_userId = User::$userId;
        $this->_usedStrategy = $strategy;
    }

    public function run(){
        $context = new Context(new $this->_usedStrategy);
        $context->run();
    }
}