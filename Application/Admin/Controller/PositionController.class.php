<?php
namespace Admin\Controller;
use Think\Exception;

class PositionController extends CommonController {

    public function index() {
        $data = array();
        //排序功能，接收排序字段
        if (isset($_REQUEST['listorder']) && in_array($_REQUEST['listorder'], array('desc', 'asc'))) {
            $data['listorder'] = I('listorder');
            $this->assign("listorder", $data['listorder']);
        }
        //分页信息
        $page = isset($_REQUEST['p']) ? $_REQUEST['p'] : 1;
        $pageSize = isset($_REQUEST['pageSize']) ? $_REQUEST['pageSize'] : 5;
        //获取数据
        $position = D("Position")->getPosition($data, $page, $pageSize);

        //获取数据的总数来实例化分页类
        $positionCount = D("Position")->getPositionCount($data);
        $res = new \Think\Page($positionCount, $pageSize);
        $pager = $res->show();
        $this->assign('pager', $pager);
        $this->assign("position", $position);

        $this->display();
    }
    
    public function add(){
        if($_POST){
            if(!isset($_POST['name']) || !trim($_POST['name'])){
                return show(0,'推荐位名不能为空！');
            }
            if(!isset($_POST['description']) || !trim($_POST['description'])){
                return show(0,'推荐位描述不能为空！');
            }
          
            //edit页面的数据要绕道用save方法保存
            if($_POST['position_id']){
                return $this->save($_POST);
            }
            try {
                $positionId = D("Position")->insert($_POST);
            
                if(!$positionId){
                    return show(0,'保存失败！');
                }
               return show(1,'保存成功！');
            } catch (Exception $ex) {
                return show(0,$ex->getMessage());
            }
            
        }
        $this->display();
    }
    
    public function edit(){
        if($_GET['id'] && is_numeric(($_GET['id']))){
            $id = I('get.id');
            $res = D("Position")->find($id);
            if(!$res){
                return $this->redirect('index');             
            }
            $this->assign('position',$res);
            $this->display();
        }  else {
            return $this->redirect('index');    
        }
    }
    
    public function save($data){
        $id = $data['position_id'];
        unset($data['position_id']);
        try {
            $result = D("Position")->updateById($id,$data);
            if(!$result ){
                return show(0,'更新失败！');
            }
            return show(1,'更新成功');
        } catch (Exception $ex) {
            return show(0, $ex->getMessage());
        }
    }
    
    public function setStatus(){
        if(IS_POST){
            $jump_url = $_SERVER['HTTP_REFERER'];
            $id = I('post.id');
            $status = I('post.status');
            try {
                $res = D("Position")->updateStatusById($id,$status);
                if(!$res){
                    return show(0, '操作失败！');
                }
                return show(1, '操作成功',array('jump_url' => $jump_url));
            } catch (Exception $ex) {
                return show(0, $ex->getMessage());
            }
        }
    }

}
