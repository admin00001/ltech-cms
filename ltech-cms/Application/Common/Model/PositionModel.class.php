<?php
namespace Common\Model;
use Think\Model;
class PositionModel extends Model{
    private $_db ='';
    public function __construct(){
        $this->_db = M("position");
    }
    //分页获取数据
    public function getPosition($data,$page,$pageSize = 10){
        $listorder = 'desc'; //默认desc降序排序
        if($data['listorder']){
            $listorder = $data['listorder'];
            unset($data['listorder']);
        }
        $offset = ($page-1) * $pageSize;
        $data['status'] = array('neq',-1);
        return $this->_db->where($data)->order('position_id '.$listorder)->limit($offset,$pageSize)->select();
    }
    
    public function getPositionCount($data = array()){
        if(isset($data['listorder']) && $data['listorder']){          
            unset($data['listorder']);
        }
        $data['status'] = array('neq',-1);// -1表示删除的状态 ，这里查询条件为不等于-1
        return $this->_db->where($data)->count();
    }
    public function find($id){
        return $this->_db->where('position_id = '.$id)->find();
    }
    //添加数据add页面的操作
    public function insert($data){
        if(!$data || !is_array($data)){
            return 0;
        }
        $data['create_time'] = time();
        return $this->_db->add($data);
    }
    //添加数据edit页面的操作
    public function updateById($id,$data){
        if(!$id || !is_numeric($id)){
            return E('更新的ID错误！');
        }
        if(!$data || !is_array($data)){
            return E('更新的数据不合法！');
        }
        
        return $this->_db->where('position_id = '.$id)->save($data);
    }
    public function updateStatusById($id,$status){
        if(!$id || !is_numeric($id)){
            return E('更新的ID错误！');
        }
        if(empty($status) || !is_numeric($status)){
            return E('更新的状态不合法！');
        }
        $data['status'] =$status;
        return $this->_db->where("position_id = ".$id)->save($data);
    }
   
    
}