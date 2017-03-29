<?php
namespace Common\Model;
use Think\Model;
class DownloadModel extends Model{
    private $_db = '';
    public function __construct(){
        $this->_db  = M("download");
    }
    public function getDownloadFile($data,$page,$pageSize = 10){
        
        $offset = ($page - 1) * $pageSize;
        if(!$data['status']){
            $data['status'] = array('neq',-1);
        }
        
        return $this->_db->where($data)->limit($offset,$pageSize)->order('id desc')->select();
    }
    //获取条件数据的数量
    public function getCount($data = array()){
        if(!$data['status']){
            $data['status'] = array('neq',-1);
        }
        return $this->_db->where($data)->count();
    }


    //添加资源文件
    public function insert($data){
        if(!$data || !is_array($data)){
            return E('数据不合法！');
        }
        $data['update_time']= $data['create_time'] = time();
        return $this->_db->add($data);
        
    }
    public function find($id){
        if(!$id || !is_numeric($id)){
            return 0;
        }
        return $this->_db->where('id = '.$id)->find();
    }
    
    //更新某一行内容
    public function updateById($id,$data){
        if(!$id || !is_numeric($id)){
            return E('id不合法！');
        }
        if(!$data || !is_array($data)){
            return E('数据不合法！');
        }
        $data['update_time'] = time();
        return $this->_db->where('id = '.$id)->save($data);
    }
    //只更新下载数
    public function updateCountById($id,$data){
        if(!$id || !is_numeric($id)){
            return E('id不合法！');
        }
        if(!$data || !is_array($data)){
            return E('数据不合法！');
        }
        return $this->_db->where('id = '.$id)->save($data);
    }
    
    //修改状态
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
    
    //获取catalogue
    public function get_catalogue(){
        return F('catalogue/new');
    } 
    
   // Catalogue信息保存在缓存里面
    public function set_catalogue($data){
        if(!$data || !is_array($data)){
            return E('数据不合法！');
        }
        $res =  F('catalogue/new',$data);
        
        return $res;
    }
    
    //前台获取
    public function select($data,$limit = 0,$orderby = '') {
        if(!$data || !is_array($data)){
            return 0;
        }
        $this->_db->where($data);
        if($limit){
            $this->_db->limit($limit);
        }
        if($orderby){
            $this->_db->order($orderby.' desc');
        }  else {
            $this->_db->order('id desc');    
        }
        return $this->_db->select();
    }
}
