<?php
namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller {

    public function index(){
        if(session('adminUser')){
            $this->redirect('index/index');
        }
        $this->display();
    }

    public function check() {
        if (IS_POST) {
            $username = I('post.username');
            $password = I('post.password');
            
            if (!trim($username)) {
                return show(0, '用户名不能为空');
            }
            if (!trim($password)) {
                return show(0, '密码不能为空');
            }
            
            //实例化model并查找username
            $ret = D('Admin')->getAdminByUsername($username); //Admin代表AdminModel层，同时AdminModel只对Admin这张表操作
            //判断用户是否存在            
            if (!$ret ) {
                return show(0,'用户不存在！');
            }
            
            //验证密码是否正确
           if ($ret['password'] != getMd5Password($password)){
              return show(0, "密码不正确!");
            }
            D("Admin")->updateById($ret['admin_id'],array('lastlogintime' => time()));//记录登陆时间
            session('adminUser', $ret);
            return show(1,'登录成功，点击确定进入后台',array('url'=>'/admin/index/index'))   ;       
        }
    }
    
    public function logout(){
         //session('adminUser', null);
         unset($_SESSION['adminUser']);
         $this->redirect('index');
    }

}
