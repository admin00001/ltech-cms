<?php
namespace Home\Controller;

class IndexController extends CommonController {
    //前台首页 网站首页
    public function index($buildhtml = ''){
        
        //banner条件获取banner
        $bannerData = array(
            'status' => 1,
            'img_xs' =>array('neq',''),
            'img_sm' =>array('neq',''),
            'img_md' =>array('neq',''),
            'img_lg' =>array('neq','')
        );
        $banner = D("Banner")->select($bannerData);
        
        //首页中间adv五图
        $advData = array(
            'status' => array('eq',1),
            'thumb' => array('neq',''),
            'id' => array('lt',6)
        );
        $advs = D("Adv")->select($advData);
        
        //news新闻栏目
        $newsData = array(
            'status' => 1,
            'thumb' => array('neq',''),
            
        ); 
        $newslimit = 1;
        $news = D("News")->select($newsData,$newslimit);
        
        //NEW产品推荐栏目
        $new = D("Products")->get_new_product();
        //产品类型
        $productsType = D("ProductsType")->getType();
        
        //projects栏目
        $projectsData = array(
            'status' => 1,
            'thumb' => array('neq',''),
        );
        $projects = D("Projects")->getProjects($projectsData,1,1);
        
        //获取catalogue
        $catalogue = D("Download")->get_catalogue();
        
        $this->assign('catalogue',$catalogue);
        $this->assign('projects',$projects);
        $this->assign('productsType',$productsType);
        $this->assign('new',$new);
        $this->assign('news',$news);
        $this->assign('advs',$advs);
        $this->assign('banners',$banner);
        $this->assign('active','Home');//用于标识当前页
        
        if($buildhtml === 'buildIndex'){
            $this->buildHtml('index',HTML_PATH,'Index/index');//生成首页静态化
            $data['time'] = time();//记录本次生成的时间
            D("Basic")->save_basic($data,'refreshIndex');//存入缓存
            $time = date('Y-m-d H:i',$data['time']);//转换为日期格式
            return show(1, '静态首页更新成功！',array('time' => $time));//返回后台提示成功！
        }else{
            $this->display();
        }    
       
    }
    
    public function build_html(){
        if(!getLoginUsername()){
            return $this->error('you cannot request !');
        }
        $this->index('buildIndex');
    }
    
    //about us 页面
    public function about(){
        $this->assign('active','About us');
        $this->display();
    }
    
    //service & support 页面
    public function service(){
        $this->assign('active','Services & support');
        $this->display();
    }
    
    //contact us 页面
    public function contact(){
        $this->assign('active','Contact us');
        $this->display();
    }
}