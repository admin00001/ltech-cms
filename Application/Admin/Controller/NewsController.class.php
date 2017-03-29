<?php
namespace Admin\Controller;
use Think\Exception;

class NewsController extends CommonController{
    public function index(){
        $data = array();
        $page = isset($_REQUEST['p']) ? $_REQUEST['p'] : 1;
        $pageSize = isset($_REQUEST['pageSize']) ? $_REQUEST['pageSize'] :10;
        
        if($_GET['keywords']) {
            $data['keywords'] = trim(I('get.keywords'));
            $this->assign('keywords',$_GET['keywords']);
        }
        $news = D("News")->getNews($data,$page,$pageSize);
        if($news){//有查到结果
            $count = D("News")->getNewsCount($data);
            $pageRes = new \Think\Page($count,$pageSize);
            $pager = $pageRes->show();
            $this->assign('pager',$pager);
            $this->assign('news',$news);
        }else{
            $this->assign('res',1);//没有查到结果
        }
        
        $this->display();
    }
    
    public function add(){
        if($_POST){
            if(!isset($_POST['title']) || !trim($_POST['title'])){
                return show(0,'title不能为空！');
            }
            if(!isset($_POST['description']) || !trim($_POST['description'])){
                return show(0,'description不能为空！');
            }
            if(!isset($_POST['content']) || !trim($_POST['content'])){
                return show(0,'content不能为空！');
            }
            $data = I('post.');//过滤
            //edit页面的数据要绕道用save方法保存
            if($_POST['news_id']){
                return $this->save($data);
            }
            try {       
                $newsId = D("News")->insert($data);              
                if(!$newsId){
                    return show(0,'添加失败！');
                }
                $content['content'] = $data['content'];
                $content['news_id'] = $newsId;
                $cid = D("NewsContent")->insert($content);
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
            $news = D("News")->find($id);
            $newsContent = D("NewsContent")->find($id);
            if(!$news && !$newsContent){
                return $this->redirect('index');             
            }
            $news['content'] = $newsContent['content'];//合并两表的数据到news
            $this->assign('news',$news);
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
                $res = D("News")->updateStatusById($id,$status);
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
        $id = $data['news_id'];
        unset($data['news_id']);
        try {
            $newsId = D("News")->updateById($id,$data);
                  
            $contentId = D("NewsContent")->updateById($id,$data);
            if(!$newsId && !$contentId){
                return show(0,'更新失败！');
            }
            return show(1,'更新成功');
        } catch (Exception $ex) {
            return show(0, $ex->getMessage());
        }
    }
}
