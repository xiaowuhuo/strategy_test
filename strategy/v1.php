<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/20
 * Time: 下午7:59
 */
namespace strategy;

use Lib\strategy;
use Lib\Db;
use Lib\User;

class v1 implements strategy{

    public $current;

    public $history = [];

    public $flow = [];

    public function checkFlow()
    {
        $flow = $this->getConf(get_class($this));
        $history = $this->getHistory();
        echo 'flow:<br/>';
        print_r($flow);
        echo '<br/>nowa history:';
        print_r($history);
        foreach ($flow as $v) {
            if(in_array($v, $history)){
                continue;
            } else {
                (new $v())->run();
                $history = $this->getHistory();
                echo "<br/>after run flow";
                print_r($history);
                return;
            }
        }
    }

    public function getConf($name)
    {
        $conf = require_once ROOT.DIRECTORY_SEPARATOR.'conf/conf.php';
        $this->flow = $conf['flow'][$name];
        return $this->flow;
    }

    public function getHistory()
    {
        $this->history = (new Db())->get(User::$userId);
        return $this->history['history'];
    }

    public function matchFlow($history)
    {

    }
}