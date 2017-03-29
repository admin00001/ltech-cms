<?php
namespace Home\Controller;
use Think\Exception;
class SearchController extends CommonController{
    public function index(){
        $data = array();
        $data['status'] = array('eq',1);
        if(isset($_GET['keyword']) && trim($_GET['keyword'])){
           $keyword = I('get.keyword');
           $where['name'] = array('like',"%".$keyword."%");//模糊查询:
           $where['description'] = array('like',"%".$keyword."%"); //查询条件
           $where['keywords'] = array('like',"%".$keyword."%");
           $where['_logic'] ="OR"; //where中的查询逻辑为or
           $data['_complex'] = $where;//复合查询，默认为and
           
           //$data['thumb'] =array('neq','');
           $this->assign('keyword',$keyword);
        }
        //分页信息
        $page = isset($_REQUEST['p']) ? $_REQUEST['p'] : 1; //默认显示第一页开始
        $pageSize = isset($_REQUEST['pageSize']) ? $_REQUEST['pageSize'] : 5;//每页显示几条数据
        
        //获取产品数据
        $result = D("Products")->getProducts($data, $page, $pageSize);

        if($result){
            $resultCount = D("Products")->getProductsCount($data);
            //实例化分页
            $pager = new \Think\Page($resultCount, $pageSize);
            $pageRes = $pager->show();
            $this->assign('page',$pageRes);
            $this->assign('result',$result);
        }  else {
            $this->assign('res','no');//没有查到结果
        }
        
        $this->display();
    }


}
