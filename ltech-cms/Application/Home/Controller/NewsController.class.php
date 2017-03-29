<?php
namespace Home\Controller;
class NewsController extends CommonController{
    public function index(){
        $data = array();
        if($_REQUEST['keyword'] && trim($_REQUEST['keyword'])){
            $keyword = I('keyword');
            $where['title'] = array('like',"%".$keyword."%");//模糊查询:
            $where['description'] = array('like',"%".$keyword."%"); //查询条件
            
            $where['_logic'] ="OR"; //where中的查询逻辑为or
            $data['_complex'] = $where;//复合查询，默认为and     
            //$data['thumb'] =array('neq','');
            $this->assign('keyword',$keyword);
        }
        //取最新新闻展示出来
        $data['status'] = array('eq',1);
        $page = isset($_REQUEST['p']) ? $_REQUEST['p'] :1;
        $pageSize = isset($_REQUEST['pageSize']) ? $_REQUEST['pageSize'] :5;        
        $newslist = D("News")->getNews($data,$page,$pageSize);
        if($newslist){//查到相关结果
            $newsCount = D("News")->getNewsCount($data);
            $pageres = new \Think\Page($newsCount, $pageSize);
            $pager = $pageres->show();
            $this->assign('pager',$pager);
            $this->assign('newslist',$newslist);
        }  else {
            $this->assign('res','no');//没有查到
        } 
        //获取catalogue
        $catalogue = D("Download")->get_catalogue();
        $this->assign('catalogue',$catalogue);
        $this->assign('active','About us');//标识导航
        $this->display();
    }
    
    //新闻详情页
    public function detail(){
        if($_GET['id'] && is_numeric($_GET['id'])){
            $id = I('get.id');
            $news = D("News")->find($id);
            if(!$news || $news['status'] != 1){
                return $this->error('sorry ,do not exists this news');    
            }
            //为news加1个阅读数
            $data['count'] = $news['count'] + 1;
            D("News")->updateById($id,$data);

            //从副表取内容数据
            $content = D("NewsContent")->find($id);
            $newscontent = html_chars_decode($content['content']);//解码内容
            $news['content'] = $newscontent;//合并数据
            
             //获取catalogue
            $catalogue = D("Download")->get_catalogue();
            $this->assign('catalogue',$catalogue);
            $this->assign('news',$news);
            $this->assign('active','About us');//标识导航
            $this->display();
        }  else {
            $this->error('sorry ,do not exists this news');    
        }
    }

//    预览功能
    public function view(){
        if(!getLoginUsername()){
            return $this->error('sorry ,do not exists this page');
        }
        $id = I('get.id');
        $news = D("News")->find($id);
        if(!$news || $news['status'] == -1){
            return $this->error('预览新闻错误');
        }
        //从副表取内容数据
        $content = D("NewsContent")->find($id);
        $newscontent = html_chars_decode($content['content']);//解码内容
        $news['content'] = $newscontent;//合并数据

        //获取catalogue
        $catalogue = D("Download")->get_catalogue();
        $this->assign('catalogue',$catalogue);
        $this->assign('news',$news);
        $this->assign('active','About us');//标识导航
        $this->display('News/detail');
    }


}