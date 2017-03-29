<?php
namespace Admin\Controller;
use Think\Exception;
class DownloadController extends CommonController{
    public function index(){
        $data = array();
        
        $productsType = D("ProductsType")->getType();//获取产品类型
            
        
        if($_GET['products_type']){ //获取提交过来的对应的产品类型
            $data['products_type'] = I('get.products_type');
            $this->assign('type',$_GET['products_type']);
        }
        if($_GET['products_id']){ //获取提交过来的对应的产品id
            $data['products_id'] = I('get.products_id');
            $this->assign('productSelect',$_GET['products_id']);
        }
           
        //分页条件
        $page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
        $pageSize = $_REQUEST['pageSize'] ? $_REQUEST['pageSize'] : 10;
        //获取结果
        $downloadfile = D("Download")->getDownloadFile($data,$page,$pageSize);
        if($downloadfile){
            $count = D("Download")->getCount($data);
            $pageRes = new \Think\Page($count, $pageSize);
            $pager = $pageRes->show();
            $this->assign('pager',$pager);//输出分页到前台管理
            $this->assign('downloadfile',$downloadfile);//输出查询结果到前台管理
        }else{
            $this->assign('res',1);//标记没有查到相关结果
        }
        
        $this->assign('productsType',$productsType);
        $this->display();
    }
    
    
    //根据ajax提交的产品类型去找产品， 实现动态二级联动
    public function ajaxGetProducts(){
        if($_POST['products_type']){
            $data['type'] = I('post.products_type'); // 根据此产品类型去products表找产品
            $data['status'] = array('neq',-1); // 未删除的产品包括正常和关闭状态的产品
        }
        $products = D("Products")->select($data);       
        $this->assign('products',$products);
        $this->display();
    }
    
    
    //add页面逻辑
    public function add(){
        if($_POST){
            if(!isset($_POST['name']) || !trim($_POST['name'])){
                return show(0,'文件名不能为空！');
            }
            if(!isset($_POST['products_type']) || !trim($_POST['products_type'])){
                return show(0,'产品类型不能为空！');
            }

            if(!isset($_POST['products_id']) || !trim($_POST['products_id'])){
                $result = D("productsType")->find($_POST['products_type']);//查一下该产品类型是不是只有产品类型而没有具体产品
                if(!$result['only_type']){
                    return show(0,'产品名不能为空！');
                }
                unset($result);
            }

            if(!isset($_POST['path']) || !trim($_POST['path'])){
                return show(0,'资源文件不能为空！');
            }
            $data = I('post.');//过滤
            //edit页面的数据要绕道用save方法保存
            if($_POST['id']){
                return $this->save($data);
            }
            try {
                $id = D("Download")->insert($data);
                if(!$id){
                    return show(0, '添加失败！');
                }
                return show(1, '添加成功');
            } catch (Exception $ex) {
                return show(0, $ex->getMessage());     
            }
            
        }       
           
        $productsType = D("ProductsType")->getType();//获取产品类型 输出到模板 
        $this->assign('productsType',$productsType);
        $this->display();
    }
    
    //edit页面逻辑
    public function edit(){
        if($_GET['id'] && is_numeric($_GET['id'])){
            $id = I('get.id');
            //通过id去获取对应的数据
            $downloadfile = D("Download")->find($id);
            if(!$downloadfile){
                return $this->redirect('index');  
            }
            $productsType = D("ProductsType")->getType();//获取产品类型 输出到模板 
            
            $this->assign('file',$downloadfile);
            $this->assign('productsType',$productsType);
            $this->display();
        }  else {
            $this->redirect('index');
            
        }   
    }
    
    public function save($data){
        $id = $data['id'];
        unset($data['id']);
        try {
            $res = D("Download")->updateById($id,$data);
            if(!$res){
                return show(0, '更新失败！');
            }
            return show(1, '更新成功');
        } catch (Exception $ex) {
            return show(0, $ex->getMessage());
            
        }
    }
    public function  setStatus(){
        if(IS_POST){
            $id=I('post.id');
            $status =I('post.status');
            $jump_url = $_SERVER['HTTP_REFERER'];
            try{
                $res = D("Download")->updateStatusById($id,$status);
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

