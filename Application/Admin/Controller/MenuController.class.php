<?php
namespace Admin\Controller;
use Think\Exception;

class MenuController extends CommonController{
    public function index(){
        $data = array();
        //降序/升序排序
        if(isset($_REQUEST['listorder']) && in_array($_REQUEST['listorder'],array('desc','asc'))){
            $data['listorder'] =I('listorder');
            $this->assign("listorder",$data['listorder']);
        }
        if(isset($_REQUEST['module']) && in_array($_REQUEST['module'],array('Admin','Home')) ){  
            $data['module']= $_REQUEST['module'];
                            
            $this->assign("module",$data['module']);          
        }
        $page = isset($_REQUEST['p']) ? $_REQUEST['p'] :1;
        $pageSize = isset($_REQUEST['pageSize']) ? $_REQUEST['pageSize'] :10;
        
        $menu = D("Menu")->getMenu($data,$page,$pageSize);
        
//       标记没有查询到相关结果
        if(!$menu){
            $this->assign("res",1);
        }
        else{
            $menuCount = D("Menu")->getMenuCount($data);
            $res = new \Think\Page($menuCount, $pageSize);
            $pager = $res->show();
            $this->assign('pager',$pager);
            $this->assign("menu",$menu);
        }
        $this->display();
    }
    
    public function add(){
        if($_POST){
            if(!isset($_POST['name']) || !trim($_POST['name'])){
                return show(0,'菜单名不能为空！');
            }
            if(!isset($_POST['module']) || !trim($_POST['module'])){
                return show(0,'菜单类型不能为空！');
            }
            if(!isset($_POST['controller']) || !trim($_POST['controller'])){
                return show(0,'菜单控制器名不能为空！');
            }
            if(!isset($_POST['function']) || !trim($_POST['function'])){
                return show(0,'菜单方法名不能为空！');
            }
            if(!isset($_POST['status']) || !in_array($_POST['status'], array(0,1))){
                return show(0,'菜单状态不能为空！');
            }
            //edit页面的数据要绕道用save方法保存
            if($_POST['menu_id']){
                return $this->save($_POST);
            }
            
            $menuId = D("Menu")->insert($_POST);
            
            if(!$menuId){
                return show(0,'保存失败！');
            }
            return show(1,'保存成功！');
        }
        $this->display();
    }
    
    public function edit(){
        if(isset($_GET['id']) && is_numeric($_GET['id'])){
           $id = intval(I('id')); 
           $menu = D("Menu")->find($id);  
           if(!$menu){
               $this->error('没有这个菜单') ;exit;
           }
           $this->assign('menu',$menu);
           $this->display();
        }     
    }
    //编辑后的保存操作  
    public function save($data){
        $menuId = $data['menu_id'];
        unset($data['menu_id']);
        try {
            $result = D("Menu")->updateById($menuId,$data);
            if(!$result ){
                return show(0,'更新失败！');
            }
            return show(1,'更新成功');
        } catch (Exception $ex) {
            return show(0, $ex->getMessage());
        }
    }
    
    //删除操作
    public function setStatus(){
        if(IS_POST){
            $id=I('id');
            $status =I('status');
            $jump_url = $_SERVER['HTTP_REFERER'];
//            print_r($status);
//            print_r($jump_url);exit;
            try{
                $res = D("Menu")->setStatusById($id,$status);
                if($res == false){
                    return show(0,'操作失败！');
                }else{
                    return show(1,'操作成功',array('jump_url' =>$jump_url ));
                }
            } catch (Exception $ex){
                return show(0, $ex->getMessage());
            }
            
            
        }
    }
    
     //更新listorder排序
    public function listorder(){
        if (IS_POST) {
            $listorder = $_POST['listorder'];
            $jump_URL = $_SERVER['HTTP_REFERER']; //获取当前post的路由地址,视图根据此路由刷新页面
            $error = array();
            if ($listorder) {
                try {
                    foreach ($listorder as $menuId => $listorder) {//数组形式遍历插入数据
                        //执行更新操作
                        $id = D("Menu")->updateListorderById($menuId, $listorder);
                        if ($id === false) {
                            $error[] = $menuId;
                        }
                    }
                } catch (Exception $ex) {
                    return show(0, $ex->getMessage(), array('jump_url' => $jump_URL));
                }

                if ($error) {
                    return show(0, '排序失败' . implode(',', $error));
                }
                return show(1, '排序成功！', array('jump_url' => $jump_URL));
            }
            return show(0, '排序数据失败！', array('jump_url' => $jump_URL));
        }
    }
}
