<?php
namespace Home\Controller;

class ProjectsController extends CommonController{
    public function index(){
        $data = array();
        if($_REQUEST['keyword'] && trim($_REQUEST['keyword'])){
            $keyword = I('keyword');
            $where['name'] = array('like',"%".$keyword."%");//模糊查询:
            $where['description'] = array('like',"%".$keyword."%"); //查询条件
            $where['start_time'] = array('like',"%".$keyword."%"); //查询条件
            $where['end_time'] = array('like',"%".$keyword."%"); //查询条件
            $where['_logic'] ="OR"; //where中的查询逻辑为or
            $data['_complex'] = $where;//复合查询，默认为and

            $this->assign('keyword',$keyword);
        }
        //取最新projects展示出来
        $data['thumb'] =array('neq','');
        $data['status'] = array('eq',1);
        $page = isset($_REQUEST['p']) ? $_REQUEST['p'] :1;
        $pageSize = isset($_REQUEST['pageSize']) ? $_REQUEST['pageSize'] :5;        
        $Projectslist = D("Projects")->getProjects($data,$page,$pageSize);
        if($Projectslist){//查到相关结果
            $projectsCount = D("Projects")->getProjectsCount($data);
            $pageres = new \Think\Page($projectsCount, $pageSize);
            $pager = $pageres->show();
            $this->assign('pager',$pager);
            $this->assign('Projectslist',$Projectslist);
        }  else {
            $this->assign('res','no');//没有查到
        } 
        //获取catalogue
        $catalogue = D("Download")->get_catalogue();
        $this->assign('catalogue',$catalogue);
        $this->assign('active','About us');//标识导航
        $this->display();
    }
    
    //项目详情页
    public function detail(){
        if($_GET['id'] && is_numeric($_GET['id'])){
            $id = I('get.id');
            $project = D("Projects")->find($id);
            if(!$project || $project['status'] != 1){
                return $this->error('sorry ,do not exists this projects');    
            }
            //为projects加1个阅读数
            $data['count'] = $project['count'] + 1;
            D("Projects")->updateById($id,$data);

            //从副表取内容数据
            $content = D("ProjectsContent")->find($id);
            $Projectscontent = html_chars_decode($content['content']);//解码内容
            $project['content'] = $Projectscontent;//合并数据
            
             //获取catalogue
            $catalogue = D("Download")->get_catalogue();
            $this->assign('catalogue',$catalogue);
            $this->assign('project',$project);
            $this->assign('active','About us');//标识导航
            $this->display();
        }  else {
            $this->error('sorry ,do not exists this projects');    
        }
    }

    //预览功能
    public function view(){
        if(!getLoginUsername()){
            return $this->error('do not exists this page');
        }
        $id = I('get.id');
        $project = D("Projects")->find($id);
        if(!$project || $project['status'] == -1){
            return $this->error('预览项目错误！');
        }

        //从副表取内容数据
        $content = D("ProjectsContent")->find($id);
        $Projectscontent = html_chars_decode($content['content']);//解码内容
        $project['content'] = $Projectscontent;//合并数据

        //获取catalogue
        $catalogue = D("Download")->get_catalogue();
        $this->assign('catalogue',$catalogue);
        $this->assign('project',$project);
        $this->assign('active','About us');//标识导航
        $this->display('Projects/detail');
    }

}