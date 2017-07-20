<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/20
 * Time: 下午7:53
 */

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
     * @method 获取当前节点；
     *
     * @return string
     */
    public function getCurrent();

    /**
     * @method  获取历史；
     *
     * @return array
     */
    public function getHistory();

    /**
     * @method 历史匹配流程；
     *
     * @param $history
     * @return mixed
     */
    public function matchFlow($history);
}