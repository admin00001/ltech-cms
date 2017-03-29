<?php
namespace Admin\Controller;
use Think\Exception;
class BasicController extends CommonController{
    public function index(){
        $basicConfigName = 'basic_config';
        $productsConfigName = 'products';
        $refreshIndexConfigName = 'refreshIndex';
        $refreshProductsConfigName = 'refreshProducts';
            
        $basic = D("Basic")->get_basic_config($basicConfigName);
        $products = D("Basic")->get_basic_config($productsConfigName);
        $refreshIndex = D('Basic')->get_basic_config($refreshIndexConfigName);
        $refreshProducts = D("Basic")->get_basic_config($refreshProductsConfigName);
        
        $this->assign('refreshProducts',$refreshProducts);
        $this->assign('refreshIndex',$refreshIndex);
        $this->assign('basic',$basic);
        $this->assign('products',$products);
        $this->display();
    }
    public function save(){
        if($_POST){
            if(!$_POST['name'] || !trim($_POST['name'])){
                return show(0, '标题不能为空！');
            }
            if(!$_POST['keywords'] || !trim($_POST['keywords'])){
                return show(0, '关键词不能为空！');
            }
            if(!$_POST['description'] || !trim($_POST['description'])){
                return show(0, '描述不能为空！');
            }
           
            $data = I('post.');
            $configName = $data['configName'];
            unset($data['configName']);
            try {
                D("Basic")->save_basic($data,$configName);
                return show(1, '保存成功');
                             
            } catch (Exception $ex) {
                return show(0, $ex->getMessage());
            } 
        }
    }
}