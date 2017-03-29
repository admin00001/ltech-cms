<?php
namespace Admin\Controller;

class IndexController extends CommonController {
    public function index(){ 
        $maxCountData = array(
            'status' => 1,
            'count' => array('gt',0)
        );
        
        $limit = 1;//选一个
        $orderby = 'count';//以count降序排序选最大那1个
        $maxcountproduct = D("Products")->select($maxCountData,$limit,$orderby);//选最多阅读数的产品
        $maxcountfile = D("Download")->select($maxCountData,$limit,$orderby);//选最多下载数的文件

        $maxcountNewsRead = D("News")->select($maxCountData,$limit,$orderby);
        $maxcountProjectsRead = D("Projects")->select($maxCountData,$limit,$orderby);
        
        $this->assign('maxcountProjectsRead',$maxcountProjectsRead[0]);
        $this->assign('maxcountNewsRead',$maxcountNewsRead[0]);

        $this->assign('maxcountfile',$maxcountfile[0]);
        $this->assign('maxcountproduct',$maxcountproduct[0]);
        $this->display();       
    }
}