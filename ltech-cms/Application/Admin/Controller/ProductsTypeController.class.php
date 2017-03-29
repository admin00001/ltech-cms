<?php
namespace Admin\Controller;

use Think\Exception;

class ProductsTypeController extends CommonController
{
    public function index()
    {
        $data = array();
        // 分页信息
        $page = isset($_REQUEST['p']) ? $_REQUEST['p'] : 1;
        $pageSize = isset($_REQUEST['pageSize']) ? $_REQUEST['pageSize'] : 5;
        // 获取数据
        $type = D("ProductsType")->getProductsType($data, $page, $pageSize);

        // 标记没有查询到相关结果
        if (!$type) {
            $this->assign("res", 1);
        } else {
            // 获取数据的总数来实例化分页类
            $productsCount = D("ProductsType")->getCount($data);
            $res = new \Think\Page($productsCount, $pageSize);
            $pager = $res->show();
            $this->assign('pager', $pager);
            $this->assign("type", $type);
        }
        $this->display();
    }

    //增加产品类型
    public function add()
    {
        if (IS_POST) {
            if (!$_POST['name'] || !trim($_POST['name'])) {
                return show(0, '产品类型名不能为空！');
            }
            if (!$_POST['introduce'] || !trim($_POST['introduce'])) {
                return show(0, '产品介绍不能为空！');
            }
            if (!$_POST['thumb'] || !trim($_POST['thumb'])) {
                return show(0, '缩略图不能为空');
            }
            if (!isset($_POST['status']) || !in_array($_POST['status'], array(0, 1))) {
                return show(0, '产品状态不能为空！');
            }
            if (!isset($_POST['only_type']) || !in_array($_POST['only_type'], array(0, 1))) {
                return show(0, '请选是否只有产品类型！');
            }
            $data = I('post.');  //获取提交 过滤的数据
            //有$_POST['id']就说明是edit页面提交的数据
            if (isset($_POST['id']) && is_numeric($_POST['id'])) {
                $result = D("ProductsType")->checkName(trim($_POST['name']), $_POST['id']);
                if ($result) {
                    return show(0, '已经有该产品类型了，请换个名字');
                }
                return $this->save($data);
            }
            //检查产品类型名
            $result = D("ProductsType")->checkName(trim($_POST['name']));
            if ($result) {
                return show(0, '已经有该产品类型了，请换个名字');
            }

            //直接添加新建的产品类型
            $id = D("ProductsType")->insert($data);
            if ($id) {
                return show(1, '添加成功');
            }
            return show(0, '添加失败！');
        }
        $this->display();
    }

    //edit
    public function edit()
    {
        if (!$_GET['id'] || !is_numeric($_GET['id'])) {
            return $this->redirect('index');
        }
        $id = I('get.id');
        $res = M("ProductsType")->find($id);
        if (!$res) {
            return $this->error('没有这个id的型号！');
        }
        $this->assign('type', $res);
        $this->display();
    }


    //更新产品类型
    public function save($data)
    {
        $id = $data['id'];
        unset($data['id']);
        try {
            $res = D("ProductsType")->updateById($id, $data);
            if (!$res) {
                return show(0, '更新失败!');
            }
            return show(1, '更新成功！');
        } catch (Exception $ex) {
            return show(0, $ex->getMessage());
        }
    }

    //更新listorder排序
    public function listorder()
    {
        if (IS_POST) {
            $listorder = $_POST['listorder'];
            $jump_URL = $_SERVER['HTTP_REFERER']; //获取当前post的路由地址,视图根据此路由刷新页面
            $error = array();
            if ($listorder) {
                try {
                    foreach ($listorder as $typeId => $listorder) {//数组形式遍历插入数据
                        //执行更新操作
                        $id = D("ProductsType")->updateListorderById($typeId, $listorder);
                        if ($id === false) {
                            $error[] = $typeId;
                        }
                    }
                } catch (Exception $ex) {
                    return show(0, $ex->getMessage(), array('jump_url' => $jump_URL));
                }

                if ($error) {
                    return show(0, '排序失败' . implode(',', $error), array('jump_url' => $jump_URL));
                }
                return show(1, '排序成功！', array('jump_url' => $jump_URL));
            }
            return show(0, '排序数据失败！', array('jump_url' => $jump_URL));
        }
    }

    //setStatus
    public function setStatus()
    {
        $id = I('post.id');
        $status = I('post.status');
        $jump_url = $_SERVER['HTTP_REFERER']; //获取当前post的路由地址,视图根据此路由刷新页面
        try {
            $res = D("ProductsType")->updateStatusById($id, $status);
            if (!$res) {
                return show(0, '操作失败!');
            }
            return show(1, '操作成功', array('jump_url' => $jump_url));
        } catch (Exception $ex) {
            return show(0, $ex->getMessage());
        }
    }


} 
