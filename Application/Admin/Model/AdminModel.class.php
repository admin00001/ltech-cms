<?php
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model{
    private $_db ='';
    public function __construct(){
        $this->_db = M("admin");//对admin表进行初始化操作
    }
    
    public function getAdminByUsername($username){
        if(!$username){
            return array();
        }
        $data= array(
            'status' => array('eq',1),
            'username' => $username 
            );
        return $this->_db->where($data)->find();
    }
   
    
    
    public function updateById($id,$data){
        if(!$id || !is_numeric($id) ){
            return E('账号异常！');
        }
        if(!$data || !is_array($data) ){
            return E('账号异常！');
        }
        $res = $this->_db->where('admin_id = '.$id)->save($data);
        return $res;
    }
    public function getAdmin($data,$page,$pageSize = 10){
        $offset = ($page-1) * $pageSize;
        $data['status'] = array('neq',-1);
        return $this->_db->where($data)->limit($offset,$pageSize)->order('admin_id asc')->select();
    }
    public function getAdminCount($data = array()){
        if( !is_array($data)){
            return 0;
        }
        $data['status'] = array('neq',-1);
        return $this->_db->where($data)->count();
    }
    
    public function insert($data = array()){
        if(!$data || !is_array($data)){
            return E('数据不合法！');
        }
        return $this->_db->add($data);
    }
    
    public function find($id){
        if(!$id || !is_numeric($id)){
            return 0;
        }
        return $this->_db->where('admin_id = '.$id)->find();
    }
    
    public function updateStatusById($id,$status){
        if(!$id || !is_numeric($id)){
            return E('ID不合法！');
        }
        if(!is_numeric($status)){
            return E('状态不合法！');
        }
        $data['status'] = intval($status);
        return $this->_db->where('admin_id = '.$id)->save($data);
    }
}