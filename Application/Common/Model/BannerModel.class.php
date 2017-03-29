<?php
namespace Common\Model;
use Think\Model;
class BannerModel extends Model{
    private $_db ='';
    public function __construct(){
        $this->_db = M("banner");
        
    }
    public function  select($data,$limit = 0){
        if(!$data || !is_array($data)){
            return 0;
        }
        $this->_db->where($data)->order('listorder desc,id desc ');
        if($limit){
            $this->_db->limit($limit);
        }
        
        return  $this->_db->select();
    }
    public function insert($data){
        if(!$data || !is_array($data)){
            return E('数据不合法！');
        }
        $data['create_time'] = $data['update_time'] = time();
        $data['username'] = getLoginUsername();
        return $this->_db->add($data);
    }
    public function find($id) {
       return $this->_db->where('id = '.$id)->find();
    }
    public function updateById($id,$data){
        if(!$id || !is_numeric($id)){
            return E("ID不合法！");
        }
        if(!$data || !is_array($data)){
            return E('数据不合法！');
        }
        return $this->_db->where('id = '.$id)->save($data);
    }
    //排序操作
    public function updateListorderById($id,$listorder){
        if(!$id || !is_numeric($id)){
            return E('id不合法！');
        }
        if(!is_numeric($listorder)){
            return E('有序号不是数字！');
        }
        $data['listorder'] = $listorder; 
        return $this->_db->where('id = '.$id)->save($data);
    }
    //更改状态
    public function updateStatusById($id,$status){
        if(!$id || !is_numeric($id)){
           return E('id不合法！');
        }
        if(!is_numeric($status)){
           return E('状态不合法！');
        }
        $data['status'] = $status;
        return $this->_db->where('id = '.$id)->save($data);
   }
   
}
