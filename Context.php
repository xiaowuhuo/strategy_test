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
class Context implements work {
    private $strategy;

    public function run()
    {
        $flow = $this->strategy->getConf(get_class($this->strategy));
        $current = $this->strategy->getCurrent();
        $history = $this->strategy->getHistory();


        return [];
    }

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }
}