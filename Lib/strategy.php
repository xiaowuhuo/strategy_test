<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/20
 * Time: 下午7:53
 */
namespace Lib;
interface strategy{

    /**
     * @method 获取流程配置；
     *
     * @param string $name
     * @return array
     */
    public function getConf($name);

    /**
     * @method 扫描流程；
     *
     * @return array
     */
    public function checkFlow();

    /**
     * @method  获取历史；
     *
     * @return array
     */
    public function getHistory();

}