<?php
namespace Admin\Controller;
use Think\Exception;
class ProjectsController extends CommonController{
    public function index(){
        $data = array();
        if($_GET['keywords']) {
            $data['keywords'] = trim(I('get.keywords'));
            $this->assign('keywords',$_GET['keywords']);
        }
        $page = $_REQUEST['p'] ?  $_REQUEST['p'] : 1;
        $pageSize =  $_REQUEST['pageSize'] ?  $_REQUEST['pageSize'] : 10;
        //获取数据
        $projects = D("Projects")->getProjects($data,$page,$pageSize);
        if($projects){
            $count = D("Projects")->getProjectsCount($data);//获取条件查询的数据总数
            $pageRes = new \Think\Page($count, $pageSize);//实例化分页
            $pager = $pageRes->show();//分页显示
        
            $this->assign('projects',$projects);
            $this->assign('pager',$pager);
        }else{
            $this->assign('res',1);
        }
       
        $this->display();
    }
    
    public function add(){      
        if($_POST){
            if(!isset($_POST['name']) || !trim($_POST['name'])){
                return show(0,'name不能为空！');
            }
            if(!isset($_POST['description']) || !trim($_POST['description'])){
                return show(0,'description不能为空！');
            }
            if(!isset($_POST['content']) || !trim($_POST['content'])){
                return show(0,'内容不能为空！');
            }
            
            $data = I('post.');//过滤接收的数据
            
            //edit页面的数据要绕道用save方法保存
            if($_POST['projects_id']){
                return $this->save($data);
            }
            try {       
                $projectsId = D("Projects")->insert($data);              
                if(!$projectsId){
                    return show(0,'添加失败！');
                }
                $content['content'] = $data['content'];
                $content['projects_id'] = $projectsId;
                $cid = D("ProjectsContent")->insert($content);
                if(!$cid ){
                    return show(0, '主表添加成功，副表添加失败！');
                }
                return show(1,'添加成功！');
            } catch (Exception $ex) {
                return show(0,$ex->getMessage());
            }          
        }
        $this->display();
    }
    
    public function edit(){
        if($_GET['id'] && is_numeric(($_GET['id']))){
            $id = I('get.id');
            $projects = D("Projects")->find($id);
            $projectsContent = D("ProjectsContent")->find($id);
            if(!$projects && !$projectsContent){
                return $this->redirect('index');             
            }
            $projects['content'] = $projectsContent['content'];//合并两表的数据到news
            $this->assign('projects',$projects);
            $this->display();
        }  else {
            return $this->redirect('index');    
        }
    }
    
    public function setStatus(){
        if(IS_POST){
            $id=I('id');
            $status =I('status');
            $jump_url = $_SERVER['HTTP_REFERER'];
            try{
                $res = D("Projects")->updateStatusById($id,$status);
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
    
     public function save($data){
        $id = $data['projects_id'];
        unset($data['projects_id']);
        try {
            $newsId = D("Projects")->updateById($id,$data);
                  
            $contentId = D("ProjectsContent")->updateById($id,$data);
            if(!$newsId && !$contentId){
                return show(0,'更新失败！');
            }
            return show(1,'更新成功');
        } catch (Exception $ex) {
            return show(0, $ex->getMessage());
        }
    }
}

