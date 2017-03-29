<?php

namespace Common\Model;
use Think\Model;
 
class ProductsTypeModel extends Model{
    private $_db = '';
    public  function __construct() {
        $this->_db = M("products_type");
    }
  
    //获取数据
    public function getProductsType($data,$page,$pageSize = 10){

        $offset = ($page - 1) * $pageSize;
        if(!$data['status']){
            $data['status'] = array('neq',-1);
        }

        return $this->_db->where($data)->limit($offset,$pageSize)->order('listorder desc,id desc')->select();
    }
    //获取符合条件的数据的总数
    public function getCount($data = array()){
        if(!$data['status']){
            $data['status'] = array('neq',-1);
        }
        return $this->_db->where($data)->count();
    }
    //添加数据
    public function insert($data =  array()){
        if(!$data || !is_array($data)){
            return E('数据非法！');
        }
        $data['create_time'] = $data['update_time'] = time();
        $data['username'] = getLoginUsername();
        return $this->_db->add($data);
    }
    //更新数据
    public function updateById($id,$data){
        if(!$id || !is_numeric($id)){
            return E('id不合法！');
        }
        if(!$data || !is_array($data)){
            return E('数据不合法！');
        }
        $data['update_time'] = time();
        $data['username'] = getLoginUsername();
        return $this->_db->where('id = '.$id)->save($data);
    }
    //updateListorderById更新排序功能
    public function updateListorderById($typeId, $listorder){
        
        if(!$typeId || !is_numeric($typeId)){
            return E('ID不合法！');
        }
        if( !is_numeric($listorder)){
            return E('有序号不是数字');
        }
        $data['listorder'] = intval($listorder);
        return $this->_db->where('id = '.$typeId)->save($data);
    }
    //updateStatusById
    public function updateStatusById($id,$status){
        if(!$id || !is_numeric($id)){
            return E('ID不合法！');
        }
        if(!isset($status) || !is_numeric($status)){
            return E('状态不合法！');
        }
        $data['status'] = $status;
        return $this->_db->where('id = '.$id)->save($data);
    }
   //获取 产品类型
   public function getType(){
       $data['status'] = array('eq',1);
       $data['thumb'] =array('neq','');
       return $this->_db->where($data)->order('listorder desc,id desc')->select();
   }
   //检查产品类型名
   public function checkName($name,$id){
       if($id){
           $data['id'] = array('neq',  intval($id));
       }
        $data['name'] = $name;
        $data['status'] = array('neq',-1);
        return $this->_db->where($data)->find();
   }
   
   //查找某个类型的数据
   public function find($id){
        if(!$id || !is_numeric($id)){
           return 0;
        }
        return $this->_db->where('id = '.$id)->find();
   }
}