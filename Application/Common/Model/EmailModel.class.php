<?php
namespace Common\Model;
use Think\Model;

class EmailModel extends Model{
    private $_db ='';
    public function __construct(){
        $this->_db = M("emailaddress");//对emailaddress进行初始化操作
        
    }
    //分页查询方法
    public function getEmail($data,$page,$pageSize = 10){
        $condition = $data;
        $order = 'desc';//默认desc降序排序
        if(isset($data['keyword']) && $data['keyword']){
            $where['id'] = array('like',"%".$data['keyword']."%");//模糊查询: id OR email AND status
            $where['email'] = array('like',"%".$data['keyword']."%");
            $where['_logic'] = 'OR';
            unset($condition['keyword']);//释放不用查询的字段条件   
            
            $condition['_complex'] = $where;//复合查询，默认为and
        } 
        if(isset($data['listorder']) && $data['listorder']){
            $order = $condition['listorder'];
            unset($condition['listorder']);//释放不用查询的字段条件
        }
        $condition['status'] = array('neq',-1);// -1表示删除的状态 ，这里查询条件为不等于-1
             
        $offset = ($page -1) * $pageSize; //查询起始的页数
        $list = $this->_db->where($condition)->limit($offset,$pageSize)->order('id '.$order)->select();
        return $list;
    }
    
    //分页查询数据的总记录数
    public function getEmailCount($data=array()){
        $condition = $data;
        if(isset($data['keyword']) && $data['keyword']){
            $where['id'] = array('like',"%".$data['keyword']."%");
            $where['email'] = array('like',"%".$data['keyword']."%");
            $where['_logic'] = 'OR';//or结构
            unset($condition['keyword']);
            $condition['_complex'] = $where; //复合查询，默认为and
        } 
        $condition['status'] = array('neq',-1);// -1表示删除的状态 ，这里查询条件为不等于-1
        return $this->_db->where($condition)->count();
    }
    
    //修改状态一般用来做删除操作
    public function setStatusById($id,$status){
        if(!$id || !is_numeric($id)){
            return E('Id不合法！');//异常抛出
        }if(!is_numeric($status)){
            return E('修改状态不合法！');//异常抛出
        }
        $data = array('status' => $status);
        return $this->_db->where('id = '.$id)->save($data);
    }
    
     //添加数据
    public function insert($data = array()){
        if(!$data || !is_array($data)){
            return E('Email Address validate error!');
        }
        $data['collect_time'] = time();
        return $this->_db->add($data);
    } 
}
