<?php
namespace Admin\Controller;
use Think\Exception;
class AdminController extends CommonController{
    public function index(){
        $data = array();
        $page = isset($_REQUEST['p']) ? $_REQUEST['p'] : 1;
        $pageSize = isset($_REQUEST['pageSize']) ? $_REQUEST['pageSize'] :10;
        
        $admin= D('Admin')->getAdmin($data,$page,$pageSize);
        if($admin){//有查到结果
            $count = D("Admin")->getAdminCount($data);
            
            $pageRes = new \Think\Page($count,$pageSize);
            $pager = $pageRes->show();
            $this->assign('pager',$pager);
            $this->assign('admins',$admin);
        }else{
            $this->assign('res',1);//没有查到结果
        }
        
        $this->display();
    }
    
    public function add(){
        if($_POST){
            if(!$_POST['username'] || !trim($_POST['username'])){
                return show(0,'用户名不能为空');
            }
            if(!$_POST['admin_id']){//不是更新用户信息才验证用户名
                $ret = D('Admin')->getAdminByUsername(I('post.username'));
                if($ret){
                    return show(0,'用户名已经有了，换个名字');
                }
            }
            
            if(!$_POST['password'] || !trim($_POST['password'])){
                return show(0,'密码不能为空');
            }
            if(!$_POST['comfirmPsw'] || !trim($_POST['comfirmPsw'])){
                return show(0,'确认密码不能为空');
                         }
            if($_POST['password'] != $_POST['comfirmPsw']){
                return show(0,'两次输入的密码不一致！');
            }
            $data = I('post.');
            unset($data['comfirmPsw']);
            $data['password'] = getMd5Password($data['password']);//密码MD5加密
            if($_POST['admin_id']){
                return $this->save($data);
            }
            try {
                $id = D("Admin")->insert($data);
                if(!$id){
                    return show(0, '添加失败！');
                }
                return show(1, '添加成功');
            } catch (Exception $ex) {
                return show(0,$ex->getMessage());    
            }
        }
        $this->display();
    }
    
    public function edit(){
        if($_GET['id'] && is_numeric(($_GET['id']))){
            $id = I('get.id');
            $admin= D("Admin")->find($id);
            
            if(!$admin){
                return $this->redirect('index');             
            }
           
            $this->assign('admin',$admin);
            $this->display();
        }  else {
            return $this->redirect('index');    
        }
        
    }
    
    public function save($data){
        $id = $data['admin_id'];
        unset($data['admin_id']);
        try {
            $res = D("Admin")->updateById($id,$data);
            if(!$res){
                return show(0,'更新失败！');
            }
            return show(1,'更新成功');
        } catch (Exception $ex) {
            return show(0, $ex->getMessage());
        }
    }
    
    public function setStatus(){
        if(IS_POST){
            $id=I('id');
            $status =I('status');
            $jump_url = $_SERVER['HTTP_REFERER'];
            try{
                $res = D("Admin")->updateStatusById($id,$status);
                if($res === false){
                    return show(0,'操作失败！');
                }else{
                    return show(1,'操作成功',array('jump_url' =>$jump_url ));
                }
            } catch (Exception $ex){
                return show(0, $ex->getMessage());
            }
                      
        }
    }
    //个人中心
    public function personal(){
        $loginUser = getLoginUsername();//返回已经登录的用户名
        if($loginUser){
            $personal = D("Admin")->getAdminByUsername($loginUser);
            $this->assign('personal',$personal);
            $this->display();
        }
        
    }
} 
