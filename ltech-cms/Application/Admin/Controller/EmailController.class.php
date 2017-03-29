<?php
namespace Admin\Controller;
use Think\Exception;
//客户邮箱控制器
class EmailController extends CommonController{
    public function index(){
        //首页显示数据
        $data = array(); //默认为空
        if(isset($_REQUEST['keyword']) && $_REQUEST['keyword'] ){          
            $data['keyword'] = I('keyword');     //I函数过滤查询条件
            $this->assign("keyword",$data['keyword']);
        }
        if(isset($_REQUEST['listorder']) && in_array($_REQUEST['listorder'],array('desc','asc'))){
            $data['listorder'] = I('listorder');
            $this->assign("listorder",$data['listorder']);
        }
        
        $page = $_REQUEST['p'] ? $_REQUEST['p'] : 1 ;
        $pageSize = $_REQUEST['pageSize'] ? $_REQUEST['pageSize'] :10;
        $email = D("Email")->getEmail($data,$page,$pageSize);//获取email数据
        
        if(!$email){
             $this->assign("res",1);//标记没有查询到相关结果
        }else{
        $emaiCount = D("Email")->getEmailCount($data);     

        $res = new \Think\Page($emaiCount, $pageSize);  //实例化分页类
      
        $pageRes = $res->show();//显示分页
        $this->assign("pager",$pageRes);
        $this->assign("email",$email);   
        }
        
        $this->display();
    }
    
    public function setStatus(){
        if(IS_POST){
            $id=I('id');
            $status =I('status');
            $jump_url = $_SERVER['HTTP_REFERER'];

            try{
                $res = D("Email")->setStatusById($id,$status);
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
}

