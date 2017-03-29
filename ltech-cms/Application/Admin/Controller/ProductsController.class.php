<?php
namespace Admin\Controller;
use Think\Exception;

class ProductsController extends CommonController {

    public function index() {
        $data = array();
        //排序功能，接收排序字段
        if (isset($_REQUEST['listorder']) && in_array($_REQUEST['listorder'], array('desc', 'asc'))) {
            $data['listorder'] = I('listorder');
            $this->assign("listorder", $data['listorder']);
        }
        //搜索类型
        if (isset($_REQUEST['type']) && is_numeric($_REQUEST['type'])) {
            $data['type'] = intval($_REQUEST['type']);
            $this->assign("type", $data['type']);
        }
        //分页信息
        $page = isset($_REQUEST['p']) ? $_REQUEST['p'] : 1; //默认显示第一页开始
        $pageSize = isset($_REQUEST['pageSize']) ? $_REQUEST['pageSize'] : 5;//每页显示几条数据
        
        //获取产品数据
        $products = D("Products")->getProducts($data, $page, $pageSize);
        //获取产品类型
        $productsType = D("ProductsType")->getType();
        //获取首页推送的new产品
        $newProducts = D("Products")->get_new_product();
        
        // 标记没有查询到相关结果
        if (!$products) {
            $this->assign("res", 1);
        } else {
            //获取数据的总数来实例化分页类
            $productsCount = D("Products")->getProductsCount($data);
            $res = new \Think\Page($productsCount, $pageSize);
            $pager = $res->show();
            $this->assign('pager', $pager);
            $this->assign("products", $products);
            
        }
        $this->assign('new',$newProducts);
        $this->assign('productsType',$productsType);
        $this->display();
    }

    //添加产品，修改产品功能接收表单数据
    public function add() {
        if ($_POST) {
            $this->checkForm();  //表单验证
            //edit 页面提交的数据 检查同一类型的产品是否重复了产品名
            if ($_POST['products_id'] && is_numeric($_POST['products_id'])) {
                $res = D("Products")->checkName(trim($_POST['name']), $_POST['type'], $_POST['products_id']); //查找同一类型的产品是否有重复名的产品

                if ($res) {
                    return show(0, '该产品类型已经有这款产品了，请重新修改产品名！');
                }
                return $this->save(I('post.')); //I('post.')代表获取所有的post提交的数据并进行htmlspecialchars过滤
            }

            //add检查同一类型的产品是否重复 产品名
            $res = D("Products")->checkName(trim($_POST['name']), $_POST['type']);

            if ($res) {
                return show(0, '该产品类型已经有这款产品了，可以去编辑页面修改它而不是重复添加！');
            }

            //add页面提交的数据
            $data = array(
                'name' => I('post.name'), //I('post.')代表获取所有的post提交的数据并进行htmlspecialchars过滤
                'type' => I('post.type'),
                'status' => I('post.status'),
                'description' => I('post.description'),
                'keywords' => I('post.keywords'),
                'title' => I('post.title'),
                'thumb' => I('post.thumb'),
                'family_products' => I('post.family_products')
            );
            try {
                $productsId = D("Products")->insert($data); //主信息插入products表
                
                if ($productsId) {
                    $productsContent = array(
                        'products_id' => $productsId,  
                        'img_main' => I('post.img_main'),
                        'description_one' => I('post.description_one'),
                        'description_two' => I('post.description_two'),
                        'img_application_one' => I('post.img_application_one'),
                        'img_application_two' => I('post.img_application_two'),
                        'description_three' => I('post.description_three'),
                        'img_small_one' => I('post.img_small_one'),
                        'img_small_two' => I('post.img_small_two'),
                        'img_small_three' => I('post.img_small_three'),
                        'features' => I('post.features'),
                        'specification_features' => I('post.specification_features'),
                        'data_banner_one' => I('post.data_banner_one'),
                        'data_banner_two' => I('post.data_banner_two'),
                        'data_banner_three' => I('post.data_banner_three'),
                        'data_banner_four' => I('post.data_banner_four'),
                        'data_banner_five' => I('post.data_banner_five'),
                        'extra_one' => I('post.extra_one'),
                        'extra_two' => I('post.extra_two')
                    );
                    $cid = D('ProductsContent')->insert($productsContent); //内容插入副表products_content
                    if ($cid) {
                        return show(1, '添加成功！');
                    } else {
                        return show(1, '主表添加成功，副表添加失败！');
                    }
                }
                return show(0, '添加失败！');
            } catch (Exception $ex) {
                return show(0,$ex->getMessage());
            }
        }
        //获取产品类型
        $productsType = D("ProductsType")->getType();
        $this->assign('type',$productsType);
        $this->display();
    }

    //编辑页面
    public function edit() {
        if (isset($_GET['id']) && is_numeric($_GET['id'])){

            $id = I('get.id');
            //products表取得主信息
            try {
                $products = D("Products")->find($id);
                if (!$products) {
                    return $this->error('没有这个型号的产品！');
                }
            } catch (Exception $ex) {
                return $this->error($ex->getMessage());
            }
            //products_content表取得对应的内容信息
            $productsContent = D("ProductsContent")->find($id);
            //合并俩表内容
            $newproducts = array_merge($products,$productsContent);
            //获取产品类型
            $productsType = D("ProductsType")->getType();

            $this->assign('products',$newproducts);               
            $this->assign('type',$productsType);
            $this->display();
        }else{
             $this->redirect('index');
        }
       
    }

    //更新操作
    public function save($data){
        $id = $data['products_id'];
        unset($data['products_id']);
        $products = array(       //更新到主表products的字段
                'name' => $data['name'] , 
                'type' => $data['type'],
                'status' => $data['status'],
                'description' => $data['description'],
                'keywords' => $data['keywords'],
                'title' => $data['title'],
                'thumb' => $data['thumb'],
                'family_products' => $data['family_products'],
            );
        $productsContent = array( //更新到副表products_content的字段
            
            'img_main' => $data['img_main'],
            'description_one' => $data['description_one'],
            'description_two' => $data['description_two'],
            'img_application_one' => $data['img_application_one'] ,
            'img_application_two' => $data['img_application_two'] ,
            'description_three' => $data['description_three'],
            'img_small_one' => $data['img_small_one'],
            'img_small_two' => $data['img_small_two'],
            'img_small_three' => $data['img_small_three'] ,
            'features' => $data['features'] ,
            'specification_features' => $data['specification_features'],
            'data_banner_one' => $data['data_banner_one'] ,
            'data_banner_two' => $data['data_banner_two'],
            'data_banner_three' => $data['data_banner_three'],
            'data_banner_four' => $data['data_banner_four'],
            'data_banner_five' => $data['data_banner_five'] ,
            'extra_one' => $data['extra_one'],
            'extra_two' => $data['extra_two']
        );

        try {
            $productsId = D("Products")->updateById($id, $products);
            $contentId  = D("ProductsContent")->updateById($id,$productsContent);
              
            if (!$productsId && !$contentId ) {
                return show(0, '更新失败！');
            }
           
            return show(1, '更新成功');
        } catch (Exception $ex) {
            return show(0, $ex->getMessage());
        }
    }
//设置状态，删除/关闭/正常
    public function setStatus(){
        if ($_POST){
            $id = I('post.id'); //I函数过滤
            $status = I('post.status');
            $jump_url = $_SERVER['HTTP_REFERER'];
            try {
                $result = D("Products")->updateStatusById($id, $status);
               
                if ($result == false) {
                    return show(0, '操作失败！');
                } else {
                    return show(1, '操作成功！', array('jump_url' => $jump_url));
                }
            } catch (Exception $ex) {
                return show(0, $ex->getMessage());
            }
        }
        return show(0, '没有提交数据！');
    }

//此控制器的表单提交验证
    public function checkForm() {
        if (!$_POST['name'] || !trim($_POST['name'])) {
            return show(0, '请输入产品名!');
        }
        if (!$_POST['type'] || !trim($_POST['type'])) {
            return show(0, '请选择产品类型!');
        }
        
        if (!$_POST['title'] || !trim($_POST['title'])) {
            return show(0, '请输入产品title 有助于SEO优化!');
        }
        if (!$_POST['keywords'] || !trim($_POST['keywords'])) {
            return show(0, '请输入产品keywords 有助于SEO优化!');
        }
        if (!$_POST['description'] || !trim($_POST['description'])) {
            return show(0, '请输入产品description 有助于SEO优化!');
        }
        if (!$_POST['thumb'] || !trim($_POST['thumb'])){
            return show(0, '请上传缩略图! 用于products页面');
        }
        if (!isset($_POST['img_main']) || !$_POST['img_main']){
            return show(0, '请上传产品大图!');
        }
        if (!$_POST['description_one'] || !trim($_POST['description_one'])){
            return show(0, '请填写产品描述一!');
        }
        if (!$_POST['description_two'] || !trim($_POST['description_two'])){
            return show(0, '请填写产品描述二!');
        }
        if(!$_POST['img_application_one'] || !trim($_POST['img_application_one'])){
            return show(0, '请上传产品应用场景图一!');
        }
        if(!$_POST['img_application_two'] || !trim($_POST['img_application_two'])){
            return show(0, '请上传产品应用场景图二!');
        }
        if (!$_POST['description_three'] || !trim($_POST['description_three'])){
            return show(0, '请填写产品描述三!');
        }
        if(!$_POST['family_products'] || !trim($_POST['family_products'])){
            return show(0, '请上传相关产品图!');
        }
//        if(!$_POST['img_small_one'] || !trim($_POST['img_small_one'])){
//            return show(0, '请上传产品浏览图一!');
//        }
//        if(!$_POST['img_small_two'] || !trim($_POST['img_small_two'])){
//            return show(0, '请上传产品浏览图二!');
//        }
//        if(!$_POST['img_small_three'] || !trim($_POST['img_small_three'])){
//            return show(0, '请上传产品浏览图三!');
//        }
//        if(!$_POST['features'] || !trim($_POST['features'])){
//             return show(0, '请填写features!');
//        }
//        if(!$_POST['specification_features'] || !trim($_POST['specification_features'])){
//             return show(0, '请填写Specification Features!');
//        }
//        if(!$_POST['data_banner_one'] && !$_POST['data_banner_two'] && !$_POST['data_banner_three'] && !$_POST['data_banner_four'] && !$_POST['data_banner_five']){
//            return show(0, '请上传产品数据图!');
//        }
        
        if (!isset($_POST['status']) || !in_array($_POST['status'], array(0, 1))) {
            return show(0, '请选择产品状态!');
        }
    }
        //推送到首页NEW产品的操作
    public function pull(){
        if(IS_POST){
            $id = I('post.productsId');
            try {
                $data = D("Products")->find($id);     
                if(!$data || $data['status'] != 1 || $data['thumb']=='' || $data['family_products'] == ''){//不正常的,没有缩略图的 没有相关产品的 都不能推送
                    return show(0, '推送失败！');
                }
                $res = D("Products")->set_new_product($data);
                
                
                return show(1, '推送成功');
                
            } catch (Exception $ex) {
                return show(0, $ex->getMessage());
            }
        }
    }
    

}
