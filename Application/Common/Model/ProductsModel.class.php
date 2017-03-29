<?php
namespace Common\Model;
use Think\Model;

class ProductsModel extends Model{
    private $_db ='';
    public function __construct() {
        $this->_db = M("products");
    }
    //获取数据
    public function getProducts($data,$page,$pageSize = 10){
        $order = 'desc';//默认desc降序排序
        
        if($data['listorder']){
            $order = $data['listorder'];
            unset($data['lisorder']);
        }
        $offset = ($page - 1) * $pageSize;
        if(!$data['status']){
            $data['status'] = array('neq',-1);
        }
        return $this->_db->where($data)->limit($offset,$pageSize)->order('products_id '.$order)->select();
    }
    
    //获取符合条件的数据的总数
    public function getProductsCount($data = array()){
        if(!$data['status']){
            $data['status'] = array('neq',-1);
        }
        return $this->_db->where($data)->count();
    }
    
    //添加数据add页面的操作
    public function insert($data = array()){
        if(!$data || !is_array($data)){
            return 0;
        }
        $data['update_time'] = $data['create_time'] = time();
        $data['username'] = getLoginUsername();
        
        return $this->_db->add($data);
    }
    //通过id查找信息
    public function find($id){
        if(!$id || !is_numeric($id) ){
            return E('没有相关信息！');
        }
        return $this->_db->where('products_id = '.$id)->find();
    }
    //后台通过id 更新数据
    public function updateById($id,$data){
        if(!$id || !is_numeric($id)){
            return E('ID不合法！');
        }
        if(!$data || !is_array($data)){
            return E('更新的数据不合法！');
        }
        $data['update_time'] = time();
        $data['username'] = getLoginUsername();
        return $this->_db->where('products_id = '.$id)->save($data);
    }
    //前台增加阅读数
    public function updateReadCount($id,$data){
        if(!$id || !is_numeric($id) || !$data || !is_array($data)){
            return 0;
        }
        $this->_db->where('products_id = '.$id)->save($data);
        
    }
    //更改状态
    public function updateStatusById($id,$status){
        if(!$id || !is_numeric($id)){          
            return E('ID不合法！');
        }
        $data = array('status' => $status);
        return $this->_db->where('products_id = '.$id)->save($data);
    }
    
    //检查是否出现重名
    public function checkName($name,$type,$id){
        if($id){
            $data['products_id'] = array('neq',intval($id));
        }      
        $data['name'] = $name;
        $data['type'] = $type;
        $data['status'] = array('neq',-1);
        return $this->_db->where($data)->find();
    }
    
    //推送到首页的new产品 保存在缓存里面Application/runtime/Data
    public function set_new_product($data){
        if(!$data || !is_array($data)){
            return E('数据不合法！');
        }
        $res =  F('product/new',$data);
        
        return $res;
    }
    
    //获取推送到首页的new产品 
    public function get_new_product(){
        return F('product/new');
    }
    
    //根据条件获取对应的产品 ，无分页
    public function select($data,$limit = 0,$orderby = ''){
        if(!$data || !is_array($data)){
            return E('查询条件不合法！');
        }
          
        if($limit){
            $this->_db->limit($limit);
        }
        if($orderby){
            $this->_db->order($orderby.' desc');
        }  else {
            $this->_db->order('products_id desc ');
        }
        if(!$data['status']){
            $data['status'] = array('neq',-1);
        }
       
        return $this->_db->where($data)->select();
    }
}