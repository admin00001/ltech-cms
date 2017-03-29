<?php
namespace Admin\Controller;
use Think\Exception;
class HomeindexController extends CommonController{
    public function index(){
        $bannerData['status'] = array('neq',-1);
        $advData['id'] = array('neq','');
        $limit = 10;
        //获取banner数据
        $banner = D("Banner")->select($bannerData,$limit);
        //获取adv 5个内容
        $adv = D("Adv")->select($advData,$limit);
        //获取产品类型
        $type = D("ProductsType")->getType();
        //获取catalogue
        $catalogue = D("Download")->get_catalogue();
        
        $this->assign('catalogue',$catalogue);
        $this->assign('type',$type);
        $this->assign("advs",$adv);
        $this->assign('banner',$banner);
        $this->display();
    }
   //banner的模板
    public function addBanner(){
        if(IS_POST){
            if(!$_POST['img_xs']){
                return show(0, '极小图不能为空');
            }
            if(!$_POST['img_sm']){
                return show(0, '小图不能为空');
            }
            if(!$_POST['img_md']){
                return show(0, '中图不能为空');
            }
            if(!$_POST['img_lg']){
                return show(0, '大图不能为空');
            }
            
            $data = I('post.');
            //编辑的banner
            if($_POST['id'] && is_numeric($_POST['id'])){
                return $this->save($data,'Banner');
            }
            //添加的banner
            try {
                $res = D("Banner")->insert($data);
                if (!$res) {
                    return show(0, '添加失败！');
                }
                return show(1, '添加成功！');
            } catch (Exception $ex) {
                return show(0, $ex->getMessage());
            }
        }
        $this->display();
    }
    //banner的模板
    public function editBanner(){
        
        if($_GET['id'] && is_numeric(($_GET['id']))){
            $id = I('get.id');
            $res = D("Banner")->find($id);
            if(!$res){
                return $this->redirect('index');             
            }
            $this->assign('banner',$res);
            $this->display();
        }  else {
            return $this->redirect('index');    
        }
    }
    public function save($data,$model=''){
        $id = $data['id'];
        unset($data['id']);
        try {
            $res = D($model)->updateById($id,$data);
            if(!$res){
                return show(0, '更新失败！');
            }
            return show(1, '更新成功');
        } catch (Exception $ex) {
            return show(0, $ex->getMessage());
        }
    }
    //公用设置状态
    public function setStatus(){
        if(IS_POST){
            $jump_url = $_SERVER['HTTP_REFERER'];
            $id = I('post.id');
            $status = I('post.status');
            $model = I('post.model');
//            print_r($model."  ".$status."  ".$id);exit;
            try {
                $res = D($model)->updateStatusById($id,$status);
                if(!$res){
                    return show(0, '操作失败！');
                }
                return show(1, '操作成功',array('jump_url' => $jump_url));
            } catch (Exception $ex) {
                return show(0, $ex->getMessage());
            }
        }
    }
     //更新listorder排序
    public function listorder(){
        if (IS_POST) {
            $listorder = $_POST['listorder'];
            $model = $_POST['model'];
            $jump_URL = $_SERVER['HTTP_REFERER']; //获取当前post的路由地址,视图根据此路由刷新页面
            $error = array();
            try {
                foreach ($listorder as $key => $value){//循环插入排序数据
                    $res = D($model)->updateListorderById($key,$value); 
                    if($res === false){
                        $error[] = $key;//记录错误信息
                    }
                }
            } catch (Exception $ex) {
                return show(0,$ex->getMessage());
            }
            if($error){
                return show(0, '排序失败'.implode(',', $error));
            }
            return show(1, '排序成功！', array('jump_url' => $jump_URL));
        }
    }
    //adv首页五图 编辑
    public function editAdv(){
        //首页跳转到编辑页面
        if($_GET['id'] && is_numeric(($_GET['id']))){
            $id = I('get.id');
            $res = D("Adv")->find($id);
            if(!$res){
                return $this->redirect('index');             
            }
            //获取产品类型
            $type = D("ProductsType")->getType();
        
            $this->assign('type',$type);
            
            $this->assign('adv',$res);
            return $this->display();
        }
        //更新数据
        if($_POST){
            if(!$_POST['thumb']){
                return show(0, '请记得上传图片啊');
            }
            $data = I('post.');
            if($_POST['id']){
                return $this->save($data,'Adv');
            }
        }
        
        else {
            return $this->redirect('index');    
        }
    }
    //保存catalogue
    public function saveCatalogue(){
        if($_POST){
            if(!$_POST['name'] || !trim($_POST['name'])){
                return show(0, '请输入文件名！');
            }
            if(!$_POST['path'] || !trim($_POST['path'])){
                return show(0, '请输入文件路径！');
            }
            $jump_url = $_SERVER['HTTP_REFERER'];
            $data = I('post.');
            $catalogue = D("Download")->set_catalogue($data);
            return show(1, '保存成功',array(jump_url => $jump_url));
        }
    }
    
}
