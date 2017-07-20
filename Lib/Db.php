<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 2017/7/20
 * Time: 21:47
 */
namespace Lib;

class Db{
    private $db;

    public function __construct()
    {
        $this->db = ROOT.DIRECTORY_SEPARATOR.'data/db';
    }

    private function getContent(){
        $content = file_get_contents($this->db);
        $content = empty($content) ? [] : json_decode($content, true);
        return $content;
    }

    public function get($user_id){
        $content = $this->getContent();
        foreach ($content as $v){
            if($user_id == $v['id']){
                return $v;
            }
        }
        return [];
    }

    public function set($user_id, $history){
        $content = $this->getContent();
        foreach($content as $k => $v){
            if($user_id == $v['id']){
                array_push($content[$k]['history'], $history);
            }
        }
        $content = json_encode($content);
        file_put_contents($this->db, $content);
    }
}