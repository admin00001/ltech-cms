<?php
namespace Common\Model;
use Think\Model;
class AdvModel extends Model{
    private $_db = '';
    public function __construct(){
        $this->_db = M('adv');
    }
    public function  select($data,$limit = 0){
        if(!$data || !is_array($data)){
            return 0;
        }
        $this->_db->where($data)->order('id asc ');
        if($limit){
            $this->_db->limit($limit);
        }
        
        return  $this->_db->select();
    }
    //更新操作
    public function updateById($id,$data){
        if(!$id || !is_numeric($id)){
            return E("ID不合法！");
        }
        if(!$data || !is_array($data)){
            return E('数据不合法！');
        }
        return $this->_db->where('id = '.$id)->save($data);
    }
    public function find($id){
        return $this->_db->where('id = '.$id)->find();
    }
    
    
}