<?php
namespace Common\Model;
use Think\Model;
class ProjectsContentModel extends Model{
    private $_db='';
    public function __construct(){
        $this->_db = M("projects_content");
    }
    
     //添加数据
    public function insert($data = array()){
        if(!$data || !is_array($data)){
            return E('数据异常！');
        }
        
        return $this->_db->add($data);
    }
    
    public function find($id){
        if(!$id || !is_numeric($id)){
            return 0;
        }
        return $this->_db->where("projects_id = ".$id)->find();
    }
    
    public function updateById($id,$data){
        if(!$id || !is_numeric($id)){
            return E('ID不合法！');
        }
        if(!$data || !is_array($data)){
            return E('更新的数据不合法！');
        }
       
        return $this->_db->where('projects_id = '.$id)->save($data);
        
    }
}