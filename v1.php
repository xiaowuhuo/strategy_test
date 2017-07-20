<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/20
 * Time: 下午7:59
 */
class v1 implements strategy{

    public $current;

    public $history = [];

    public $flow = [];

    public function __construct()
    {
    }

    public function checkFlow()
    {
        // TODO: Implement checkFlow() method.
    }

    public function getConf($name)
    {
        // TODO: Implement getConf() method.
        echo $name;
    }

    public function getCurrent()
    {
        // TODO: Implement getCurrent() method.
    }

    public function getHistory()
    {
        // TODO: Implement getHistory() method.
    }

    public function matchFlow($history)
    {
        // TODO: Implement matchFlow() method.
    }
}