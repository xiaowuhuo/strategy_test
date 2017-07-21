<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/20
 * Time: 22:53
 */
namespace flow;

use Lib\Db;
use Lib\Context;
use Lib\flow;
use Lib\User;

class B implements flow {
    public static function getVersion(){
        $versions = (Context::$strategy)->flow['flow_version'];
        return $versions[get_called_class()];
    }

    public function run(){
        echo '执行了'.__CLASS__.'，更改状态';
        (new Db())->set(User::$userId, ['history' => get_class($this) . ':' . self::getVersion(), 'strategy_his' => get_class(Context::$strategy).':'. get_class($this). ':'. self::getVersion()]);
    }

    public static function checkSelf()
    {
        // TODO: Implement checkSelf() method.
    }

    public function data()
    {
        echo 'I am '.__CLASS__.',获取数据；';
    }
}