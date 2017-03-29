<?php

namespace Home\Controller;

use Think\Exception;

class ProductsController extends CommonController {


//    public function index($buildhtml = '') {
//        $productsType = D("ProductsType")->getType();
//        $productsData = array(
//            'status' => 1,
//            'thumb' => array('neq', ''),
//        );
//        $products = D("Products")->select($productsData);
//        $this->assign('products', $products);
//        $this->assign('type', $productsType);
//        $this->assign('active', 'Products'); //在导航条 标识当前导航
//
//        if($buildhtml === 'build_products_index'){
//            $this->buildHtml('products',HTML_PATH,'Products/index');
//            $data['time'] = time();//记录本次生成的时间
//            D("Basic")->save_basic($data,'refreshProducts');//存入缓存
//            $time = date('Y-m-d H:i',$data['time']);//转换为日期格式
//            return show(1, '静态产品主页更新成功！',array('time' => $time));//返回后台提示成功！
//        }  else {
//            $this->display();
//        }
//    }


    public function index($buildhtml = ''){

        $this->assign('active', 'Products'); //在导航条 标识当前导航
        if($buildhtml === 'build_products_index'){
            $this->buildHtml('products',HTML_PATH,'Products/index');
            $data['time'] = time();//记录本次生成的时间
            D("Basic")->save_basic($data,'refreshProducts');//存入缓存
            $time = date('Y-m-d H:i',$data['time']);//转换为日期格式
            return show(1, '静态产品主页更新成功！',array('time' => $time));//返回后台提示成功！
        }  else {
            $this->display();
        }
    }
    //生成静态产品主页products.html
    public function build_html(){
        if(!getLoginUsername()){
            return $this->error('do not exists this page');
        }
        $this->index('build_products_index');
    }

    //产品类型页
    public function type() {
        if (!$_GET['id'] || !is_numeric($_GET['id'])) {
            return $this->error('Without these products!');
        }
        $id = I('get.id'); //产品类型id 
        $type = D("ProductsType")->find($id);

        if ($type['status'] != 1 || !$type) {
            return $this->error('These products do not exist! ');
        }
        /*
         * 线条灯类型id = 2,跳转到模板led-linear-lights.html这个模板
         *
         */
        if($id == 2){
            $this->display('Products/led-linear-lights');
        }
        /*
         * 软条灯类型id = 4,跳转到模板led_neon_lights.html这个模板
         *
         */
        else if($id == 4){
            $this->display('Products/led_neon_lights');
        }else{
            //获取产品类型缩略图来当 banner
            $typeBanner = D("ProductsType")->getType();

            $productsData = array(
                'status' => 1,
                'thumb' => array('neq', ''),
                'type' => $id
            ); //找对应的产品信息
            $products = D("Products")->select($productsData);
            $this->assign('products', $products);
            $this->assign('typeBanner', $typeBanner);
            $this->assign('type', $type);
            $this->assign('active', 'Products'); //在导航条 标识当前导航
            $this->display();
        }
    }

    //产品类型预览
    public function typeview(){
        if(!getLoginUsername()){
            return $this->error('soory,do not exists this page');
        }
        $id = I('get.id'); //产品类型id
        $type = D("ProductsType")->find($id);

        if ($type['status'] == -1 || !$type) {
            return $this->error('预览产品类型错误！');
        }
        //获取产品类型缩略图来当 banner
        $typeBanner = D("ProductsType")->getType();

        $productsData = array(
            'status' => 1,
            'thumb' => array('neq', ''),
            'type' => $id
        ); //找对应的产品
        $products = D("Products")->select($productsData);

        $this->assign('products', $products);
        $this->assign('typeBanner', $typeBanner);
        $this->assign('type', $type);
        $this->assign('active', 'Products'); //在导航条 标识当前导航
        $this->display('Products/type');
    }



    //产品详情页
    public function product() {
        if (!$_GET['id'] || !is_numeric($_GET['id'])) {
            return $this->error('Without this product!');
        }
        $id = I('get.id'); //产品id找产品主表的信息 
        $products = D("Products")->find($id);

        if (!$products || $products['status'] != 1) {
            return $this->error('This product do not exist! ');
        }
        //阅读数加1
        $read = array();
        $read['count'] = $products['count'] + 1;
        D("Products")->updateReadCount($products['products_id'], $read);
        unset($read);

        //产品id找产品副表的详细内容信息 
        $content = D("ProductsContent")->find($id);
        //产品详情页解码,通过html_chars_decode函数把$content数组中的每个value都解码 这样value中的html标签能被浏览器解析,html_chars_decode函数在Common/Common/function
        $newcontent = array_map('html_chars_decode', $content);

        //合并两数组
        $product = array_merge($products, $newcontent);

        //根据产品类型找相关产品 用于family轮播
        $familyData = array(
            'type' => $product['type'],
            'thumb' => array('neq', ''),
            'status' => array('eq', 1)
        );

        $familylist = D("Products")->select($familyData);

        //download文件
        $downloadData = array(
            'status' => 1,
            'path' => array('neq', ''),
            'products_type' => $product['type'],
            'products_id' => $product['products_id']
        );
        $download = D("Download")->select($downloadData);

        $this->assign('download', $download);
        $this->assign('family', $familylist);
        $this->assign('product', $product);
        $this->assign('active', 'Products'); //在导航条 标识当前导航

        $this->display();
    }

    //预览功能
    public function view(){
        if(!getLoginUsername()){
            return $this->error('sorry,do not exists this page');
        }
        $id = I('get.id'); //产品id找产品主表的信息
        $products = D("Products")->find($id);

        if (!$products || $products['status'] == -1) {
            return $this->error('预览产品错误！ ');
        }

        //产品id找产品副表的详细内容信息
        $content = D("ProductsContent")->find($id);
        //产品详情页解码,通过html_chars_decode函数把$content数组中的每个value都解码 这样value中的html标签能被浏览器解析,html_chars_decode函数在Common/Common/function
        $newcontent = array_map('html_chars_decode', $content);

        //合并两数组
        $product = array_merge($products, $newcontent);

        //根据产品类型找相关产品 用于family轮播
        $familyData = array(
            'type' => $product['type'],
            'thumb' => array('neq', ''),
            'status' => array('eq', 1)
        );

        $familylist = D("Products")->select($familyData);

        //download文件
        $downloadData = array(
            'status' => 1,
            'path' => array('neq', ''),
            'products_type' => $product['type'],
            'products_id' => $product['products_id']
        );
        $download = D("Download")->select($downloadData);

        $this->assign('download', $download);
        $this->assign('family', $familylist);
        $this->assign('product', $product);
        $this->assign('active', 'Products'); //在导航条 标识当前导航

        $this->display('Products/product');

    }


    //为某个文件增加下载次数 ，统计点击数
    public function downloadCount(){
        if ($_POST['fileId'] && is_numeric($_POST['fileId'])) {
            $id = I('post.fileId');            
            $down = D("Download");
            $info = $down->find($id); //先拿出来
            $data['count'] = $info['count'] + 1; //加1            
            $result = $down->updateCountById($id, $data); //再放回去
            if ($result) {
                return show(1,'success');
            }
        }
    }

    //线条灯具体详情页面模板
    public function linear_lights() {
        $this->display('Products/linear-lights');//直接在模板渲染产品信息
    }
    //软灯条flexible neon led具体详情页面模板
    public function flexible_neon_led(){
        $this->display();//直接在模板渲染产品信息
    }
}
