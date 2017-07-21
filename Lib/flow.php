<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/21
 * Time: 上午10:24
 */

namespace Lib;


interface flow
{
    public function run();

    public static function checkSelf();

    public function data();

    public static function getVersion();
}