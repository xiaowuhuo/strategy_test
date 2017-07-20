<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/20
 * Time: 下午8:00
 */
define("ROOT", __DIR__);
require_once 'Lib/Loader.php';
spl_autoload_register('Loader::autoload');

echo '<pre>';
$e = new \Lib\Enter('strategy\v2');
$e->run();
echo '</pre>';