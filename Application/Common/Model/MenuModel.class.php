<?php
namespace Common\Model;
use Think\Model;

class MenuModel extends Model{
    private $_db ='';
    
    public function __construct(){
        $this->_db = M("menu");
    }
    
    //获取后台菜单
    public function getAdminMenus(){
        $where = array(
            'status' => array('eq',1),//正常的
            'module' => 'Admin'         //后台模块的
        );
        return $this->_db->where($where)->order('listorder desc,menu_id asc')->select();
    }
    
     //获取前端导航
    public function getHomeNav(){
        $where = array(
            'status' => array('eq',1),//正常的
            'module' => 'Home'         //前端的
        );
        return $this->_db->where($where)->order('listorder desc,menu_id asc')->select();
    }
    
    
    //获取所有菜单数据
    public function getMenu($data,$page,$pageSize=10){
        
        $order = 'desc';//默认desc降序排序
        if(isset($data['listorder']) && $data['listorder']){
            $order = $data['listorder'];
            unset($data['listorder']);
        }
        
        $data['status'] = array('neq',-1);// -1表示删除的状态 ，这里查询条件为不等于-1
             
        $offset = ($page -1) * $pageSize; //查询起始的页数
        $menu = $this->_db->where($data)->limit($offset,$pageSize)->order('listorder desc,menu_id '.$order)->select();
        return $menu;
    }
    //获取符合条件的菜单的总数
    public function getMenuCount($data = array()){
        if(isset($data['listorder']) && $data['listorder']){        
            unset($data['listorder']);
        }
        $data['status'] = array('neq',-1);// -1表示删除的状态 ，这里查询条件为不等于-1
        return $this->_db->where($data)->count();
    }
    //查找某条菜单的信息
    public function find($id){
        return $this->_db->where('menu_id = '.$id)->find();
    }
    
    //添加数据add页面的操作
    public function insert($data = array()){
        if(!$data || !is_array($data)){
            return 0;
        }
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
        
        return $this->_db->where('menu_id = '.$id)->save($data);
    }
    public function setStatusById($id,$status){
        if(!$id || !is_numeric($id)){
            return E('更新的ID错误！');
        }
        if(!is_numeric($status)){
            return E('更新的状态不合法！');
        }
        $data['status'] =$status;
        return $this->_db->where("menu_id = ".$id)->save($data);
    }
//     updateListorderById更新排序功能
    public function updateListorderById($menuId, $listorder){
        
        if(!$menuId || !is_numeric($menuId)){
            return E('ID不合法！');
        }
        if( !is_numeric($listorder)){
            return E('有序号不是数字!请输入正整数');
        }
        $data['listorder'] = intval($listorder);
        return $this->_db->where('menu_id = '.$menuId)->save($data);
    }
}

