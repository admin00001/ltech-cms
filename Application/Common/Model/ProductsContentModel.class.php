<?php
namespace Common\Model;
use Think\Model;
 
class ProductsContentModel extends Model{
    private $_db ='';
    public function __construct(){
        $this->_db = M("products_content");
        
    }
    
    public function insert($data = array()){
        if(!$data || !is_array($data)){
            return E('数据异常！');
        }
        $data['create_time'] =  time();
        return $this->_db->add($data);
    }
    
    public function find($id){
        if(!$id || !is_numeric($id)){
            return 0;
        }
        return $this->_db->where("products_id=".$id)->find();
    }
    
    public function updateById($id,$data){
        if(!$id || !is_numeric($id)){
            return E('ID不合法！');
        }
        if(!$data || !is_array($data)){
            return E('更新的数据不合法！');
        }
       
        return $this->_db->where('products_id = '.$id)->save($data);
        
    }
}