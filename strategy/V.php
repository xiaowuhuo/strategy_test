<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/20
 * Time: 23:59
 */
namespace strategy;

use Lib\flow;
use Lib\strategy;
use Lib\Db;
use Lib\User;

class V implements strategy {
    public $current;

    public $history = [];

    public  $flow = [];

    public function checkFlow()
    {
        $flow = $this->getConf(get_class($this));
        $history = $this->getHistory();
        echo 'flow:<br/>';
        print_r($flow);
        echo '<br/>now history:';
        print_r($history);
        foreach ($flow as $v) {
            $check = $v . ':' . $v::getVersion();
            if(in_array($check, $history)){
                continue;
            } else {
                $ins = new $v();
                $ins->run();
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
        $this->flow = $conf;
        return $conf['flow'][$name];
    }

    public function getHistory()
    {
        $this->history = (new Db())->get(User::$userId);
        return $this->history['history'];
    }

}