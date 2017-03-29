<?php
namespace Common\Model;
use Think\Model;
class BasicModel extends Model{
    public function __construct(){
        
    }
    //保存基本配置
    public function save_basic($data = array(),$configName){
        if(!$data || !is_array($data)){
            return E('数据不合法！');
        }
        if(!$configName){
            return E('数据不合法！');
        }
        $id = F($configName,$data);
        return $id; 
    }
    
    //获取基本配置
    public function get_basic_config($configName){
        if(!$configName){
            return 0;
        }
        return F($configName);
    }
   
}